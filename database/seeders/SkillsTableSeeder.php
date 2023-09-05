<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->delete();

        $this->createSkills();
    }

    protected function createSkills()
    {

        $types = ['AF', 'PS']; // Affective & Psychomotor Traits/Skills
        $d = [

            [ 'name' => 'CO1', 'skill_type' => $types[0] ],
            [ 'name' => 'CO2', 'skill_type' => $types[0] ],
            [ 'name' => 'CO3', 'skill_type' => $types[0] ],
            [ 'name' => 'CO4', 'skill_type' => $types[0] ],
            [ 'name' => 'CO5', 'skill_type' => $types[1] ],
            [ 'name' => 'CO6', 'skill_type' => $types[1] ],
            [ 'name' => 'CO7', 'skill_type' => $types[1] ],
            [ 'name' => 'CO8', 'skill_type' => $types[1] ],

        ];
        DB::table('skills')->insert($d);
    }

}
