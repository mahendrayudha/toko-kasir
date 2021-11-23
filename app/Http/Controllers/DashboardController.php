<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {

        if (auth()->user()->level == 1) {
            return view('admin.dashboard');
        } else {
            return view('kasir.dashboard');
        }
    }
}
