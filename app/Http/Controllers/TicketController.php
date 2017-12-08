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
    public function mates(){
        $mates = DB::table('mates as m')
            ->leftJoin('tickets as t1','m.mate_one_id','=','t1.id')
            ->leftJoin('tickets as t2','m.mate_other_id','=','t2.id')
            ->select('m.*','t1.name as mate_one_name','t2.name as mate_other_name'
                ,'t1.sex as mate_one_sex','t2.sex as mate_other_sex'
                ,'t1.phone_number as mate_one_phone_number','t2.phone_number as mate_other_phone_number'
                ,'t1.id_number as mate_one_id_number','t2.id_number as mate_other_id_number')
            ->get();
        return view('ticket/mates',compact('mates'));
    }
}
