<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::create(
            [
                'id_nilai' => 1,
                'name_siswa' => 'Ahmad Kurdiadi',
                'kelas'=> 'X',
            ]);
    }
}
