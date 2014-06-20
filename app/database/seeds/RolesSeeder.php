<?php
class RolesSeeder extends Seeder {

    public function run()
    {
    	//creating the admin rol
        $rol = new Role;
		$rol->name = 'Admin';
		$rol->save();
    }

}