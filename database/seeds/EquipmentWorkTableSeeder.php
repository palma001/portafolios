<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipmentWorkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipment_works')->insert([
        	[
        		'equipment_id' => 1,
        		'work_id' => 1,
        		'user_created_id' => 1
        	],
        	[
        		'equipment_id' => 1,
        		'work_id' => 2,
        		'user_created_id' => 1
        	],
        	[
        		'equipment_id' => 1,
        		'work_id' => 3,
        		'user_created_id' => 1
        	],
        	[
        		'equipment_id' => 1,
        		'work_id' => 4,
        		'user_created_id' => 1
        	],
        	[
        		'equipment_id' => 2,
        		'work_id' => 1,
        		'user_created_id' => 1
        	],
        	[
        		'equipment_id' => 2,
        		'work_id' => 2,
        		'user_created_id' => 1
        	],
        	[
        		'equipment_id' => 2,
        		'work_id' => 3,
        		'user_created_id' => 1
        	],
        	[
        		'equipment_id' => 2,
        		'work_id' => 4,
        		'user_created_id' => 1
        	]
        ]);
    }
}
