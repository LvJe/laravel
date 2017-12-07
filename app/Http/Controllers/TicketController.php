<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TicketController extends Controller
{
    //
    public function showTickets(){
        $tickets = DB::table('tickets')->get();
        return view('ticket/tickets',compact('tickets'));
    }
}
