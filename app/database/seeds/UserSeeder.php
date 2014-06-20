<?php
class UserSeeder extends Seeder {

    public function run()
    {
    	//creating the admin user
        $user = new User;
        $user->username = "admin";
        $user->email = "sig394@gmail.com";
        $user->password = "123456";
        $user->password_confirmation = "123456";
        $user->confirmed = 1;
        $user->save();
    }

}