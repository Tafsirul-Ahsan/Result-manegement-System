<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('class_types')->delete();

        $data = [
            ['name' => 'CSE', 'code' => 'C'],
            ['name' => 'EEE', 'code' => 'PN'],
            ['name' => 'TXT', 'code' => 'N'],
            ['name' => 'ENG', 'code' => 'P'],
            ['name' => 'MATH', 'code' => 'J'],
            ['name' => 'LAB', 'code' => 'S'],
        ];

        DB::table('class_types')->insert($data);

    }
}
