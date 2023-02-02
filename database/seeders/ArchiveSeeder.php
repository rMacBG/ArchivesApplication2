<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArchiveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('archives')->insert([
           [
               'Archive' => 'Event',
               'Archive Description' => 'Eventfull thing you have accomplished!',
           ],
           [
             'Archive' => 'Documentation',
             'Archive Description' => 'Documented something useful!',

           ],
           [
             'Archive'=> 'Archived file',
             'Archive Description' => 'Archived file with a lot of documents/files/images!',
           ],
           [
            'Archive'=> 'File',
            'Archive Description'=> 'Any kind of file you need to keep!'
           ]
       ]);
    }
}
