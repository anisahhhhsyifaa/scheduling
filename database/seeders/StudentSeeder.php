<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::create(['name' => 'Bahasa Indonesia']);
        Student::create(['name' => 'English']);
        Student::create(['name' => 'Math']);
        Student::create(['name' => 'IPA']);
        Student::create(['name' => 'IPS']);
        Student::create(['name' => 'PKN']);
        Student::create(['name' => 'Bahasa Jepang']);
        Student::create(['name' => 'PAI']);
        Student::create(['name' => 'PJOK']);
        Student::create(['name' => 'Produktif']);

        Student::factory(100)->create();

    }
}
