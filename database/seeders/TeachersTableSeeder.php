<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('teachers')->insert([
            'name' => 'John Doe',
            'gender' => 'Male',
            'date_of_birth' => '1990-05-15',
            'address' => '123 Main St, City',
            'mobile' => '123-456-7890',
            'email' => 'john.doe@example.com',
            'qualification' => 'Master of Science',
            'experience' => '5 years',
            'remarks' => 'Excellent teacher with a passion for mathematics.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
