<?php

use Illuminate\Database\Seeder;

class PlacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $place = new \App\Place([
        'id'=> '1',
        'name' =>'cafeteria',
        'list' =>' '
        ]);
        $place->save();
    
    $place = new \App\Place([
        'id'=> '2',
        'name' =>'office',
        'list' =>' '
        ]);
        $place->save();
    
    $place = new \App\Place([
        'id'=> '3',
        'name' =>'way',
        'list' =>' '
        ]);
        $place->save();
        
        
    }
}
