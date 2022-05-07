<?php

namespace Database\Seeders;

use DateTime;
use App\Models\Flight;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Database\Factories\FlightFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Flight::factory()->count(10)->create();
    }
}
