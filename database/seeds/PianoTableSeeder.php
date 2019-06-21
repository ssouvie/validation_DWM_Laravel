<?php

use Illuminate\Database\Seeder;

class PianoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pianos')->insert([
            'name' => 'XR210',
            'brand' => 'Yamaha',
            'fabrication' => 2017,
            'description' => " Le Kawai XR210, en dépit de ses ailes pour une taille relativement petite de 1,53m vraiment grand instrument avec un gros son, ce qui est à distinguer de ses grands frères à peine.",
            'price'=>9792,
        ]);        
    }
}
