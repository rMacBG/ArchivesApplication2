<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArchivesViewController extends Controller
{
   public function archives(){
       $archives = DB::table('archives')->select('Archive', 'Archive_Description')->get();
       return (
           view('archive_view', ['archives' => $archives])
       );
   }
}
