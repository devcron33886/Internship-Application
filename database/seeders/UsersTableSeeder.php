<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'                 => 1,
                'name'               => 'Admin',
                'email'              => 'admin@admin.com',
                'password'           => bcrypt('password'),
                'remember_token'     => null,
                'verified'           => 1,
                'verified_at'        => '2021-03-31 10:47:01',
                'verification_token' => '',
                'mobile'             => '',
                'department'         => '',
                'qualification'      => '',
                'option'             => '',
            ],
        ];

        User::insert($users);
    }
}
