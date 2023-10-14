<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // index function implementation

    public function index(){

        return view('client.dashboard');
    }
}
