<?php

use Illuminate\Database\Seeder;

class WorkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('works')->insert([
        	[
        		'title' => 'Kompetitions',
        		'start_date' => '2019-07-01',
        		'end_date' => '2019-11-20',
        		'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi sint natus, magnam ratione voluptatibus repellat aliquid id consequatur dignissimos, eaque vero non provident culpa numquam ullam est laborum iure maxime?',
        		'image' => 'kompetiton.jpg',
        		'link' => '#',
        		'showHome'=> true,
        		'user_created_id' => 1,
        	],
        	[
        		'title' => 'Mydas',
        		'start_date' => '2018-07-01',
        		'end_date' => '2019-11-20',
        		'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi sint natus, magnam ratione voluptatibus repellat aliquid id consequatur dignissimos, eaque vero non provident culpa numquam ullam est laborum iure maxime?',
        		'image' => 'mydas.jpg',
        		'link' => '#',
        		'showHome'=> true,
        		'user_created_id' => 1,
        	],
        	[
        		'title' => 'Roraima',
        		'start_date' => '2018-07-01',
        		'end_date' => '2019-11-20',
        		'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi sint natus, magnam ratione voluptatibus repellat aliquid id consequatur dignissimos, eaque vero non provident culpa numquam ullam est laborum iure maxime?',
        		'image' => 'roraima.jpg',
        		'link' => '#',
        		'showHome'=> true,
        		'user_created_id' => 1,
        	],
        	[
        		'title' => 'Petro bowl',
        		'start_date' => '2018-07-01',
        		'end_date' => '2019-11-20',
        		'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi sint natus, magnam ratione voluptatibus repellat aliquid id consequatur dignissimos, eaque vero non provident culpa numquam ullam est laborum iure maxime?',
        		'image' => 'petrobowl.jpg',
        		'link' => '#',
        		'showHome'=> true,
        		'user_created_id' => 1,
        	],
        	[
        		'title' => 'Condominums',
        		'start_date' => '2018-07-01',
        		'end_date' => '2019-11-20',
        		'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi sint natus, magnam ratione voluptatibus repellat aliquid id consequatur dignissimos, eaque vero non provident culpa numquam ullam est laborum iure maxime?',
        		'image' => 'condominums.jpg',
        		'link' => '#',
        		'showHome'=> true,
        		'user_created_id' => 1,
        	]
        ]);
    }
}
