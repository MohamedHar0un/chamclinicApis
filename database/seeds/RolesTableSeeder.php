<?php

use App\Role;
use Illuminate\Database\Seeder;
class RolesTableSeeder extends Seeder
{
    public function run()
    {
        $owner = new Role();
        $owner->name = 'owner';
        $owner->display_name = 'Product Owner';
        $owner->description = 'User is the owner of a given project';
        $owner->save();

        $owner = new Role();
        $owner->name = 'admin';
        $owner->display_name = 'Administrator';
        $owner->description = 'Administrating the whole project';
        $owner->save();

        $owner = new Role();
        $owner->name = 'manager';
        $owner->display_name = 'Manager';
        $owner->description = 'User is the Manager';
		$owner->save();        

        $owner = new Role();
        $owner->name = 'teamleader';
        $owner->display_name = 'Team Leader';
        $owner->description = 'User is a team leader';
        $owner->save();        

    }
}
