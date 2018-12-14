<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \App\Admin::create([
        // 'name'	=> str_random(20),
        // 'email'	=> str_random(10) . '@gmail.com',
        // 'job_title' => str_random(20),
        // 'password'	=> bcrypt('secret')
        // ]);
        factory(\App\Admin::class, 3)->create();
    }
}
