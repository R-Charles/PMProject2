<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        Record::create([
            'name' => 'Laravel List One',
            'description' => 'List of complaints from Jan 2010 to Dec 2010',
            'status' => 'Inactive'
        ]);

        Record::create([
            'name' => 'Laravel List Two',
            'description' => 'List of complaints from Jan 2011 to Dec 2011',
            'status' => 'Inactive'

        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}