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
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique dolores eum mollitia aperiam temporibus sed accusantium maxime inventore cum earum quaerat repudiandae explicabo, assumenda voluptate perferendis, alias eveniet perspiciatis voluptas.',
                'image' => 'luigi-colonna-351099.jpg',
                'user_created_id' => 1
            ],
            [
        		'name' => 'Ramon',
        		'lastname' => 'Teran',
        		'email' => 'ramonteran@gmail.com',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique dolores eum mollitia aperiam temporibus sed accusantium maxime inventore cum earum quaerat repudiandae explicabo, assumenda voluptate perferendis, alias eveniet perspiciatis voluptas.',
                'image' => '0.jpeg',
                'user_created_id' => 1
            ]
        ]);
    }
}
