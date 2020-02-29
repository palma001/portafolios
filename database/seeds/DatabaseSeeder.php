<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
        	UsersTableSeeder::class,
        	ProfessionTableSeeder::class,
            EquipmentTableSeeder::class,
        	EquipmentProfessionTableSeeder::class,
            SettingTableSeeder::class,
            WorkTableSeeder::class,
            EquipmentWorkTableSeeder::class
        ]);
    }
}
