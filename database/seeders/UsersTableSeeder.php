<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('users')->delete();

        \DB::table('users')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$YloV/g48cMqOSnPZz65zd.i4DA4iTnjo.yoN0hWyTBdg8vlD4WuwW',
                'remember_token' => NULL,
                'created_at' => '2022-02-24 13:58:20',
                'updated_at' => '2022-02-24 13:58:20',
            ),
        ));
    }
}
