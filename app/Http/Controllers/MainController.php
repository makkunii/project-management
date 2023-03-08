<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;


class MainController extends Controller
{
   //AYOS NATO WAG NG GALAWIN
    public function index(Request $request)
    {

        $token = $request->cookie('token');
        $info = session()->get('data');
        if ($token != null && $info != null) {
            return view('pages.dashboard')->with(compact('info'));
        } else {
            return view('pages.login');
        }
    }
   //AYOS NATO WAG NG GALAWIN
    public function dashboard(Request $request)
    {

        $token = $request->cookie('token');
        $info = session()->get('data');
        if ($token != null && $info != null) {
            return view('pages.dashboard')->with(compact('info'));
        } else {
            return view('pages.login');
        }
     }

   //AYOS NATO WAG NG GALAWIN
     public function login(Request $request)
    {

        $token = $request->cookie('token');
        $info = session()->get('data');
        if ($token != null && $info != null) {
            return redirect()->back()->withInput()->withErrors(['message' => 'Invalid Request']);
        } else {

            return view('pages.login');
        }
    }
      //AYOS NATO WAG NG GALAWIN
    public function loginprocess(Request $request)
    {

            $token = $request->cookie('token');
            $info = session()->get('data');
            $email = $request->input('email');
            $password = $request->input('password');

            $response = Http::accept("application/json")->get(config('auth.API') . '/api/login/', ['email' => $email, 'password' => $password]);

            if ($response->successful()) {
                $info = $response['data'];
                $token = $response['data']['token'];
                Session::put('data', $info);
                return Redirect::to('dashboard')->cookie('token', $token);
            }
            else {
                Cookie::queue(Cookie::forget('token'));
                session()->flush();
                return Redirect::to('login');
            }


    }
    //AYOS NATO WAG NG GALAWIN
    public function logout(Request $request)
    {
        $token = $request->cookie('token');
        $response = Http::accept("application/json")->get(config('auth.API') . '/api/logout/', ['token' => $token]);

        if ($response->successful()) {
            //destroy sesssion and cookies
            Cookie::queue(Cookie::forget('token'));
            session()->flush();
            //redirect to login
            return Redirect::to('login');
        } else {
            dd('ANDITO AKO');
        }
    }
}
