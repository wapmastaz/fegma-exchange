<?php

namespace App\Http\Controllers;

use App\Http\Requests\Order\CreateOrder;
use App\Http\Requests\Order\UpdateOrder;
use App\Models\Order;
use App\Models\Rate;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::latest()->get();
        return view('admin.order.index', [
            'title' => 'All Orders',
            'orders' => $orders,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateOrder $request)
    {
        // dd($request->validated);
        $data = $request->validated();
        // handle file upload
        $orderImage = $data['image'];
        $fileName = 'order-' . uniqid('FX') . '.' . $orderImage->getClientOriginalExtension();
        # for save original image
        $originalPath = $orderImage->storeAs('orders', $fileName, 'public');

        // find rate by country
        $rate = Rate::where('country', $data['country'])->first();
        if (!$rate) {
            $notify[] = ['warning', 'No Available rate for the country selected'];
            return redirect()->back()->with('notify', $notify);
        }

        $order = Order::create([
            'title' => $data['title'],
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'mobile' => $data['mobile'],
            'state' => $data['state'],
            'country' => $data['country'],
            'account_number' => $data['account_number'],
            'bank_name' => $data['bank_name'],
            'btc_amount' => $data['amount'],
            'local_amount' => $rate->value * $data['amount'],
            'screenshot' => $fileName,
        ]);

        // send mail if order sent
        if ($order) {
            // send mail to admin
            $notify[] = ['notice', 'Order Placed Successfully'];
            return redirect()->back()->with('notify', $notify);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $uid)
    {
        //find order by uid
        $order = Order::findByUid($uid);

        return view('admin.order.show', [
            'title' => 'Showing Order From: ' . $order->getNameAttributes(),
            'order' => $order,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrder $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}