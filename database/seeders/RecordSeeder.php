<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class RecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Record::create([
        // DB::table('record')->insert([
        'name' => 'Laravel List One',
        'description' => 'List of complaints from Jan 2010 to Dec 2010',
        'status' => 'Inactive'
        ]);

        Record::create([
        // DB::table('record')->insert([
        'name' => 'Laravel List Two',
        'description' => 'List of complaints from Jan 2011 to Dec 2011',
        'status' => 'Inactive'

        ]);
    }
}
