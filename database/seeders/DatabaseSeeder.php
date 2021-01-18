<?php

namespace Database\Seeders;

use App\Models\Accounts\User;
use App\Models\Systems\Setting;
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

        Setting::query()->insert([
            ['meta_key' => Setting::KEY_FB_APP_ID, 'meta_value' => '709945862992310'],
            ['meta_key' => Setting::KEY_FB_APP_SECRET, 'meta_value' => '9c824112dfce46a550252a5e8c26c3fc'],
            ['meta_key' => Setting::KEY_FB_GRAPH_API_VERSION, 'meta_value' => 'v9.0'],
        ]);

    }
}
