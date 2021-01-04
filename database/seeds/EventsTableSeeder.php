<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i<15; $i++)
            DB::table('events')->insert([
                'title' => $i . ' Title ' . $i,
                'body' => $i . ' Lorem ipsum dolor sit amet ' . $i,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

    }
}
