<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();

	$seeders = [
		'AddressesTableSeeder',
		'AircraftsTableSeeder',
		'AtasTableSeeder',
		'CompaniesTableSeeder',
		'CompanyContactsTableSeeder',
		'ConditionsTableSeeder',
		'ContactTypesTableSeeder',
		'CountriesTableSeeder',
		'ContracttopicsTableSeeder',
		'ContracttypesTableSeeder',
		'LocationsTableSeeder',
		'PhonesTableSeeder',
		'ProjectsTableSeeder',
		'ProjectTypesTableSeeder',
		'RolesTableSeeder',
		'SystemicsTableSeeder',
		'UsersTableSeeder',
	];

	foreach($seeders as $seeder){
		$this->call($seeder);
	}

	Model::reguard();
    }
}
