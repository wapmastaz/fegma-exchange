<?php

namespace App\Http\Controllers;

use App\Models\Faq;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        // Simply return home page
        return view('/frontend/home');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        // Simply return home page
        return view('/frontend/about');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function faq()
    {
        $faqs = Faq::where('status', 1)->latest()->get();
        // Simply return home page
        return view('/frontend/faq', ['faqs' => $faqs]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function support()
    {
        // Simply return home page
        return view('/frontend/support');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function exchangeRate()
    {
        // Simply return home page
        return view('/frontend/rate');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sell()
    {
        // Simply return home page
        return view('/frontend/sell');
    }

}