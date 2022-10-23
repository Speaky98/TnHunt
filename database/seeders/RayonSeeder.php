<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Rayon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RayonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rayon::factory()->count(5)->create();
    }
}
