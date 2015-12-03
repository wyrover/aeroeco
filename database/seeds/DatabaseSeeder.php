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
		'LocationsTableSeeder',
		'PhonesTableSeeder',
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
