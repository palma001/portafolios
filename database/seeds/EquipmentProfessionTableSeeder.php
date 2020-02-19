<?php

use Illuminate\Database\Seeder;

class EquipmentProfessionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipment_professions')->insert([
        	[
        		'profession_id' => 1,
        		'equipment_id' => 1,
                'user_created_id' => 1
        	],
        	[
        		'profession_id' => 2,
        		'equipment_id' => 1,
                'user_created_id' => 1
        	],
        	[
        		'profession_id' => 3,
        		'equipment_id' => 1,
                'user_created_id' => 1
        	],
        	[
        		'profession_id' => 4,
        		'equipment_id' => 1,
                'user_created_id' => 1
        	],
        	[
        		'profession_id' => 5,
        		'equipment_id' => 1,
                'user_created_id' => 1
        	],
        	[
        		'profession_id' => 1,
        		'equipment_id' => 2,
                'user_created_id' => 1
        	],
        	[
        		'profession_id' => 2,
        		'equipment_id' => 2,
                'user_created_id' => 1
        	],
        	[
        		'profession_id' => 3,
        		'equipment_id' => 2,
                'user_created_id' => 1
        	],
        	[
        		'profession_id' => 4,
        		'equipment_id' => 2,
                'user_created_id' => 1
        	],
        	[
        		'profession_id' => 5,
        		'equipment_id' => 2,
                'user_created_id' => 1
        	]
        ]);
    }
}
