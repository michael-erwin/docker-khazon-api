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
        // factory(App\User::class, 1)->create();
        $admin = new \App\User;
        $admin->name = "John Cena";
        $admin->email = "john.cena@gmail.com";
        $admin->password = app('hash')->make('password123');
        $admin->address = '0x'.sha1(microtime());
        $admin->role_id = 1;
        $admin->save();
    }
}
