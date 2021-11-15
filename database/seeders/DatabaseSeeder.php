<?php

namespace Database\Seeders;

use App\Models\Publicoferts;

use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Seeder;

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
        User::factory(1)->create();
        Role::factory(2)->create();
        Publicoferts::factory(100)->create();
    }
}
