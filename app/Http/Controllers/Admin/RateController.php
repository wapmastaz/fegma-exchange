<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Rate\StoreRate;
use App\Http\Requests\Admin\Rate\UpdateRate;
use App\Models\Rate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class RateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rates = Rate::latest()->get();
        return view('admin.rate.index', [
            'title' => 'All Rates',
            'rates' => $rates,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $rate = new Rate();

        if (!empty($request->old())) {
            $rate->fill($request->old());
        }

        return view('admin.rate.create', [
            'title' => 'Create Rate',
            'rate' => $rate,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRate $request)
    {

        $data = $request->validated();
        // find rate by country
        $rate = Rate::where('country', $data['country'])->first();
        if ($rate != null) {
            $notify[] = ['error', 'Rate for this Country has been set'];
            // redirect back
            return Redirect()->back()->with('notify', $notify);
        }
        $data['status'] = ($request->status == "pending") ? false : true;
        // create a new rate
        $rate = Rate::create($data);
        if ($rate) {
            $notify[] = ['notice', 'Rate created successful'];
            // redirect back
            return Redirect()->route('rate.index')->with('notify', $notify);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rate  $rate
     * @return \Illuminate\Http\Response
     */
    public function show(Rate $rate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rate  $rate
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $uid)
    {
        //find rate by uid
        $rate = Rate::findByUid($uid);

        return view('admin.rate.edit', [
            'title' => 'Edit Rate: ' . $rate->country,
            'rate' => $rate,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rate  $rate
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRate $request, $uid)
    {
        //find rate by uid
        $rate = Rate::findByUid($uid);
        $data = $request->validated();
        $data['status'] = ($request->status == "pending") ? false : true;
        $rate->update($data);
        $notify[] = ['notice', 'Rate updated successful'];
        // redirect back
        return Redirect()->route('rate.index')->with('notify', $notify);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rate  $rate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $uid)
    {
        //find rate by uid
        $rate = Rate::findByUid($uid);
        if ($rate) {
            $rate->delete();
            $notify[] = ['notice', 'Rate deleted successful'];
            // redirect back
            return Redirect()->back()->with('notify', $notify);
        }
    }

    public function getRate(Request $request)
    {
        // return $request->all();
        $response = [];
        // find rate by country
        $rate = Rate::where('country', $request->country)->first();
        if (!$rate) {
            $response['message'] = 'Not found';
            return response()->json($response, 200);
        }

        $response['message'] = 'success';
        $response['data'] = $rate;
        return response()->json($response, 200);
    }

}