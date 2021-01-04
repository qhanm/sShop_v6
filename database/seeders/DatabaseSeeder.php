<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Quach Hoai Nam';
        $user->email = 'qhnam.67@gmail.com';
        $user->username = 'qhnam';
        $user->password = Hash::make('123456');
        $user->save();
    }
}
