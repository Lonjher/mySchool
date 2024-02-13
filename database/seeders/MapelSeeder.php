<?php

namespace Database\Seeders;

use App\Models\mapel;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        mapel::create([
            "nama_pelajaran" => "Bahasa Indonesia"
        ]);
    }
}
