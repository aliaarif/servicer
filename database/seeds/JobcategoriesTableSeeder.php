<?php

use Illuminate\Database\Seeder;
use App\Models\Jobcategory;
class JobcategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Jobcategory::truncate();

    	$categories = [
    		['type' => 'Residential'],
            ['type' => 'Industrial'],
            ['type' => 'Commercial']
        ];

        Jobcategory::insert($categories);
        
    }
}
