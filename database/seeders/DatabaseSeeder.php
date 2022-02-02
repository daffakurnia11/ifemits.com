<?php

namespace Database\Seeders;

use App\Models\Bundle;
use App\Models\Event_setting;
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

        $event = new Event_setting;
        $event->event   = 'if-web';
        $event->save();

        $event = new Event_setting;
        $event->event   = 'msm';
        $event->save();

        $event = new Event_setting;
        $event->event   = 'exhibitor';
        $event->save();

        $event = new Event_setting;
        $event->event   = 'food-and-beverage';
        $event->save();

        $event = new Event_setting;
        $event->event   = 'effect';
        $event->save();

        $event = new Event_setting;
        $event->event   = 'ticket';
        $event->save();

        // Bundle::factory(299)->create();
    }
}
