<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = 'Admin';
        $user->email = 'admin@test.com';
        $user->email_verified_at = now();
        $user->password = ('p@ssword');
        $user->role = ('admin');
        $user->remember_token = Str::random(10);
        $user->save();
    }
}
