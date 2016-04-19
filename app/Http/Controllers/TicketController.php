<?php

namespace App\Http\Controllers;

use App\Ticket;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = Ticket::orderBy('id','asc')->get();
        return view('ticket.index',compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::whereIn('type',['outbound'])->get();
        return view('ticket.create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $ticket = Ticket::create(
//            [
//                'first_name' => $request->first_name,
//                'last_name' => $request->last_name,
//                'address' => $request->address,
//                'phone' => $request->phone,
//                'area' => $request->area,
//                'city' => $request->city,
//                'car' => $request->car,
//                'booking_time' => $request->booking_time,
//                'from' => $request->from,
//                'where' => $request->where,
//                'user_id' => $request->user_id,
//            ]
//          );
        $ticket = new Ticket();
        $ticket->first_name = $request->first_name;
        $ticket->last_name = $request->last_name;
        $ticket->address = $request->address;
        $ticket->phone = $request->phone;
        $ticket->area = $request->area;
        $ticket->city = $request->city;
        $ticket->car = $request->car;
        $ticket->booking_time= $request->booking_time;
        $ticket->from = $request->from;
        $ticket->where = $request->where;

        $agent = User::find($request->user_id);
//        $agent->ticket()->save($ticket);
        $ticket->agent()->associate($agent);
        $ticket->save();

        return redirect()->route('ticket.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function updateStatus(Request $request){
        $ticket = Ticket::find($request->id);
        $ticket->status = $request->status;
        $ticket->save();

        return redirect()->back();
    }

    public function ticketsReports(){
        $tickets = Ticket::orderBy('id','desc')->get();
        $confirm = Ticket::where('status','Confirm')->count();
        $pending = Ticket::where('status','')->count();
        $cancel = Ticket::where('status','Cancel')->count();
        $fake = Ticket::where('status','Fake')->count();
        return view('reports.ticket_reports',compact('tickets','confirm','pending','cancel','fake'));
    }



























}
