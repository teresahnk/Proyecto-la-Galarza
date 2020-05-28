<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function indexAdmin(Request $request)
    {
         $request->user()->authorizeRoles([ 'indexAdmin']);
            return view('home');
    }

    public function indexSuper(Request $request)
    {
        $request->user()->authorizeRoles([ 'indexSuper']);
            return view('home');
    }

    public function indexSct(Request $request)
    {
        $request->user()->authorizeRoles([ 'indexSct']);
             return view('home');
    }

    public function indexAdming(Request $request)
    {
        $request->user()->authorizeRoles([ 'indexAdming']);
            return view('home');
    }
}
