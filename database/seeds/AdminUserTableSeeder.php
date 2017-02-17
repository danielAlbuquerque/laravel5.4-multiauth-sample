<?php

use App\AdminUser;
use Illuminate\Database\Seeder;

class AdminUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new AdminUser();
        $user->name = "Daniel Albuquerque Admin";
        $user->email = "daniel.alb.querque@gmail.com";
        $user->password = bcrypt("123456");
        $user->save();
    }
}
