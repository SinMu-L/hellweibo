<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(50)->create();
        $user = User::find(1);
        $user->name = 'sinmu';
        $user->email = '3459917374@qq.com';
        $user = User::find(2);
        $user->name = 'admin';
        $user->email = '3038267725@qq.com';
        $user->save();
    }
}
