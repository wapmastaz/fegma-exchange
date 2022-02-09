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

}