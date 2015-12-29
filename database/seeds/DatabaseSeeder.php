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
		'AircraftPartTableSeeder',
		'AircraftsTableSeeder',
		'AtasTableSeeder',
		'AuctionsTableSeeder',
		'CompaniesTableSeeder',
		'CompanyContactsTableSeeder',
		'ConditionsTableSeeder',
		'ConsortiumGlobalsTableSeeder',
		'ContactTypesTableSeeder',
		'CountriesTableSeeder',
		'ContracttopicsTableSeeder',
		'ContracttypesTableSeeder',
        'DisassemblersTableSeeder',
		'LocationsTableSeeder',
		'MessagesTableSeeder',
		'NotificationsTableSeeder',
        'NotificationtypesTableSeeder',
		'PackagesTableSeeder',
		'PartsListingTableSeeder',
		'PhonesTableSeeder',
		'ProjectsTableSeeder',
		'ProjectAircraftsTableSeeder',
		'ProjectEnginesTableSeeder',
		'ProjectStatusesTableSeeder',
		'ProjectTypesTableSeeder',
		'RolesTableSeeder',
		'StatusesTableSeeder',
		'SystemicsTableSeeder',
		'TechsTableSeeder',
		'UsersTableSeeder',
	];

	foreach($seeders as $seeder){
		$this->call($seeder);
	}

	Model::reguard();
    }
}
