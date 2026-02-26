<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gadai;

class GadaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create some sample pawn records
        Gadai::factory(20)->create();
    }
}
