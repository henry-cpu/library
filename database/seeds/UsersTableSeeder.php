<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class)->create(
            [
                'firstname' => 'default_user',
                'lastname' => 'default_user',
                'email' => 'library@app.local'

            ]
        );
        factory(\App\User::class, 20)->create();

    }
}
