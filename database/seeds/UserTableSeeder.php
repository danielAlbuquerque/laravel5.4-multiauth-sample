<?php

use App\User;
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
        $user = new User();
        $user->name = "Daniel Albuquerque User";
        $user->email = "daniel.alb.querque@gmail.com";
        $user->password = bcrypt("123456");
        $user->save();

    }
}
