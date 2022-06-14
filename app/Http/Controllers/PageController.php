<?php

namespace App\Http\Controllers;
use App\Models\Trip;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index() {
        $trips = Trip::all();
        //dd($trips);
        return view('home', compact('trips'));
    }

}
