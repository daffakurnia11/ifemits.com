<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Visitor;
use Illuminate\Database\Seeder;
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
        // \App\Models\User::factory(10)->create();

        // Visitor::factory(50)->create();

        $user = new User;

        $user->name     = 'Admin';
        $user->username = 'admin.ifem';
        $user->password = Hash::make('HelloAdmin123!');
        $user->roles    = 'Admin';
        $user->save();
    }
}
