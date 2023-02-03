<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventsController extends Controller
{
   public function events(){
       $events = DB::table('events')->select('name', 'description', 'image')->get();
       return (
           View('events_view',['events' => $events])
       );
   }
}
