<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Faq\StoreFaq;
use App\Http\Requests\Admin\Faq\UpdateFaq;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faq = Faq::latest()->get();
        return view('admin.faq.index', [
            'title' => 'All Faqs',
            'faqs' => $faq,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $faq = new Faq();

        return view('admin.faq.create', [
            'title' => 'Create Faq',
            'faq' => $faq,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFaq $request)
    {
        $data = $request->validated();
        // create a new rate
        $faq = Faq::create([
            'question' => $data['question'],
            'status' => ($data['status'] == 'pending') ? false : true,
            'answer' => $data['answer'],
        ]);
        if ($faq) {
            $notify[] = ['notice', 'Faq created successful'];
            // redirect back
            return Redirect()->route('faq.index')->with('notify', $notify);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function show(Faq $faq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $uid)
    {
        //find rate by uid
        $faq = Faq::findByUid($uid);

        return view('admin.faq.edit', [
            'title' => 'Edit Faq: ' . $faq->question,
            'faq' => $faq,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFaq $request, $uid)
    {
        //find rate by uid
        $faq = Faq::findByUid($uid);
        $data = $request->validated();
        $data['status'] = ($request->status == "pending") ? false : true;
        $faq->update($data);
        $notify[] = ['notice', 'Faq updated successful'];
        // redirect back
        return Redirect()->route('faq.index')->with('notify', $notify);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faq $faq)
    {
        //
    }
}