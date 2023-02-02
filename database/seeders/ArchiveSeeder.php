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
               'Archive' => 'Executable files',
               'Archive_Description' => 'File with the .exe extension',
           ],
           [
             'Archive' => 'Documentation',
             'Archive_Description' => 'Documented something useful!',

           ],
           [
             'Archive'=> 'Archived File',
             'Archive_Description' => 'Archived file with a lot of documents/files/images!',
           ],
           [
            'Archive'=> 'File',
            'Archive_Description'=> 'Any kind of file you need to keep!'
           ]
       ]);
    }
}
