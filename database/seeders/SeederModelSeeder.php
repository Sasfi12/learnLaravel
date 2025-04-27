<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SeederModel;
class SeederModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SeederModel::factory(10)->create([
            'name' => Str::random(10), 
            'rank' => Str::random(10)
        ]) ;
    }
}
