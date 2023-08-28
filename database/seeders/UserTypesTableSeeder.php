<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['title' => 'faculty', 'name' => 'Faculty', 'level' => 4],
            ['title' => 'coi', 'name' => 'COI', 'level' => 3],
            ['title' => 'teacher', 'name' => 'Teacher', 'level' => 2],
            ['title' => 'admin', 'name' => 'Admin', 'level' => 1],
           // ['title' => 'librarian', 'name' => 'librarian', 'level' => 5],
        ];
        DB::table('user_types')->insert($data);
    }
}
