<?php

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
        	[
        		'title_page' => 'Servicio Web',
        		'subtitle_page' => null,
        		'description_page' => null,
        		'image_page' => 'Iumj3JNjybo9qz4uNmwdDJmBEDk9WIjCfiNeQVp8.jpeg',
        		'header_title' => 'Services web',
        		'favicon' => 'Iumj3JNjybo9qz4uNmwdDJmBEDk9WIjCfiNeQVp8.jpeg',
        		'facebook_link' => 'https://www.facebook.com/cursodeprogramacion/?eid=ARCk-_ijezlbdWCbCmXQnnvXr5uRMaF-R0axpIyhE6iEn3c2yLkS27f-Qmb1TZugyT5rlWRx5lYMvThv',
        		'twitter_link' => null,
        		'instagram_link' => null,
        		'linkedln_link' => null,
                'phone' => '02819475555',
                'email' => 'palmaluis1997@gmail.com',
                'address' => 'Venezuela, Barcelona'
        	]
        ]);
    }
}
