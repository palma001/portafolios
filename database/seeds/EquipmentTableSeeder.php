<?php

use Illuminate\Database\Seeder;

class EquipmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipment')->insert([
        	[
        		'name' => 'Luis',
        		'lastname' => 'Palma',
        		'email' => 'palmaluis1997@gmail.com',
                'description' => null,
                'image' => null,
                'user_created_id' => 1
            ],
            [
        		'name' => 'Ramon',
        		'lastname' => 'Teran',
        		'email' => 'ramonteran@gmail.com',
                'description' => null,
                'image' => null,
                'user_created_id' => 1
            ]
        ]);
    }
}
