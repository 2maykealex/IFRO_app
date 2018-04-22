<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'     => 'Mayke Alex',
            'email'    => 'mayke.suporte@gmail.com',
            'password' => bcrypt('123456'),
            'image'    => '',
        ]);

        // User::create([
        //     'name'     => 'Mayke Alex',
        //     'email'    => 'mayke.suporte@gmail.com',
        //     'password' => bcrypt('123456'),
        //     'image'    => '',
        // ]);
    }
}
