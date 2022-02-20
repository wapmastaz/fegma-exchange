<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\Order;
use App\Models\Rate;

class DashboardController extends Controller
{
    //
    public function index()
    {
        // all orders
        $countAllOrders = Order::count();

        // approved order
        $countApprovedOrders = Order::where('status', 1)->count();

        // all Rates
        $countRates = Rate::count();

        // all Faqs
        $countFaqs = Faq::count();

        // orders
        $orders = Order::latest()->take(5)->get();

        return view('admin.dashboard.index', [
            'title' => 'Dashboard',
            'countAllOrder' => $countAllOrders,
            'countApprovedOrders' => $countApprovedOrders,
            'countRates' => $countRates,
            'countFaqs' => $countFaqs,
            'orders' => $orders,
        ]);
    }
}