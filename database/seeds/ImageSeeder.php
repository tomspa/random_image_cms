<?php

use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('image')->insert([
            'url' => 'https://www.w3schools.com/images/colorpicker.gif'
        ]);
    }
}
