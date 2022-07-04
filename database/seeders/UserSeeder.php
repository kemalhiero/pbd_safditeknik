<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [

            'name' => 'teknisi',

            'email' => 'teknisi@example.com',

            'password' => Hash::make('teknisi'),

            'role' => 'teknisi'

            ],
            [

            'name' => 'pelanggan',

            'email' => 'pelanggan@example.com',

            'password' => Hash::make('pelanggan'),

            'role' => 'pelanggan'

            ],
            [

            'name' => 'admin',

            'email' => 'admin@example.com',

            'password' => Hash::make('admin'),

            'role' => 'admin'

            ]
        );
    }
}
