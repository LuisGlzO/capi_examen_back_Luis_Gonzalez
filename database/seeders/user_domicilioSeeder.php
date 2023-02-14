<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class user_domicilioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\user_domicilio::factory(100)->create();
    }
}
