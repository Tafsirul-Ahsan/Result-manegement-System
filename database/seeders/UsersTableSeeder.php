<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Helpers\Qs;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        $this->createNewUsers();
        $this->createManyUsers( 3);
    }

    protected function createNewUsers()
    {
        $password = Hash::make('123'); // Default user password

        $d = [

            ['name' => 'Super_Admin',
                'email' => 'super@admin.com',
                'username' => 'super_admin',
                'password' => $password,
                'user_type' => 'super_admin',
                'code' => strtoupper(Str::random(10)),
                'remember_token' => Str::random(10),
            ],

            ['name' => 'Faculty',
            'email' => 'faculty@gmail.com',
            'password' => $password,
            'user_type' => 'admin',
            'username' => 'faculty',
            'code' => strtoupper(Str::random(10)),
            'remember_token' => Str::random(10),
            ],

            ['name' => 'Co-Ordinator',
                'email' => 'co@ordinator.com',
                'user_type' => 'teacher',
                'username' => 'teacher',
                'password' => $password,
                'code' => strtoupper(Str::random(10)),
                'remember_token' => Str::random(10),
            ],

            ['name' => 'COI',
                'email' => 'coi@gmail.com',
                'user_type' => 'accountant',
                'username' => 'accountant',
                'password' => $password,
                'code' => strtoupper(Str::random(10)),
                'remember_token' => Str::random(10),
            ],

            // ['name' => 'Faculty',
            //     'email' => 'faculty@gmail.com',
            //     'user_type' => 'accountant',
            //     'username' => 'accountant',
            //     'password' => $password,
            //     'code' => strtoupper(Str::random(10)),
            //     'remember_token' => Str::random(10),
            // ],
        ];
        DB::table('users')->insert($d);
    }

    protected function createManyUsers(int $count)
    {
        $data = [];
        $user_type = Qs::getAllUserTypes(['super_admin', 'librarian', 'student']);

        for($i = 1; $i <= $count; $i++){

            foreach ($user_type as $k => $ut){

                $data[] = ['name' => ucfirst($user_type[$k]).' '.$i,
                    'email' => $user_type[$k].$i.'@'.$user_type[$k].'.com',
                    'user_type' => $user_type[$k],
                    'username' => $user_type[$k].$i,
                    'password' => Hash::make('123'),
                    'code' => strtoupper(Str::random(10)),
                    'remember_token' => Str::random(10),
                ];

            }

        }

        DB::table('users')->insert($data);
    }
}