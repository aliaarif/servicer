<?php

use Illuminate\Database\Seeder;
use App\Models\Jobfrequency;
class JobfrequenciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Jobfrequency::truncate();

    	$categories = [
    		['type' => 'One-off'],
            ['type' => 'Weekly'],
            ['type' => 'Fortnightly'],
            ['type' => 'Monthly']
        ];

        Jobfrequency::insert($categories);
        
    }
}
