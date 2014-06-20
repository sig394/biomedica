<?php
class UserRoleSeeder extends Seeder {

    public function run()
    {
    	//add the admin rol
    	$admin = Role::where('name','=','Admin')->first();
        $user = User::where('username','=','admin')->first();
		$user->attachRole($admin);
    }

}