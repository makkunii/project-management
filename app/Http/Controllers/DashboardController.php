<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function show(Request $request) {

        $token = $request->cookie('token');
        $info = session()->get('data');
        if ($token != null && $info != null) {
               return view('pages.dashboard_pages.projects')->with(compact('info'));
        } else {
            return view('pages.login');
        }


    }
}
