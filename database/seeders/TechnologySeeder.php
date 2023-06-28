<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Admin\Technology;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technologies = [
            'HTML', 
            'CSS', 
            'JavaScript', 
            'VUE',
            'PHP',
            'Laravel'
        ];

        foreach($technologies as $element){
            $new_technology = new Technology();
            $new_technology->name = $element;
            $new_technology->save();
        }
    }
}
