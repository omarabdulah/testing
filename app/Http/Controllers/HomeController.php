<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Ticket;
use App\User;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = Ticket::count();
        $out_agents = User::where('type','outbound')->count();
        $in_agents = User::where('type','inbound')->count();
        return view('dashboard',compact('out_agents','in_agents','tickets'));
    }
}
