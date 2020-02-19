<?php

use Illuminate\Database\Seeder;

class ProfessionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('professions')->insert([
        	[
        		'name' => 'Laravel',
        		'description' => null,
        		'user_created_id' => 1
        	],
        	[
        		'name' => 'Vuejs',
        		'description' => null,
        		'user_created_id' => 1
        	],
        	[
        		'name' => 'Php',
        		'description' => null,
        		'user_created_id' => 1
        	],
        	[
        		'name' => 'Angular',
        		'description' => null,
        		'user_created_id' => 1
        	],
        	[
        		'name' => 'Express',
        		'description' => null,
        		'user_created_id' => 1
        	],
        	[
        		'name' => 'Nodejs',
        		'description' => null,
        		'user_created_id' => 1
        	]
        ]);
    }
}
