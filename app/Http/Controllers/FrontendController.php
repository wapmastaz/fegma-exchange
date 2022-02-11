<?php

namespace App\Http\Controllers;

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
        // Simply return home page
        return view('/frontend/faq');
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

}