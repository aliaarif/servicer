<?php

use Illuminate\Database\Seeder;
use App\Models\Category;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Category::truncate();

    	$categories = [
    		['parent_id' => 0,'quote_form_id' => 1, 'name' => 'House'],
            ['parent_id' => 1,'quote_form_id' => 0, 'name' => 'Bedroom'],
            ['parent_id' => 1,'quote_form_id' => 0, 'name' => 'Bathroom deep cleaning'],
            ['parent_id' => 1,'quote_form_id' => 0, 'name' => 'Living room'],
            ['parent_id' => 1,'quote_form_id' => 0, 'name' => 'Deck/Balcony'],
            ['parent_id' => 1,'quote_form_id' => 0, 'name' => 'Kitchen deep cleaning'],
            ['parent_id' => 1,'quote_form_id' => 0, 'name' => 'Garage'],
            ['parent_id' => 1,'quote_form_id' => 0, 'name' => 'Window cleaning'],
            ['parent_id' => 1,'quote_form_id' => 0, 'name' => 'Water storage tank cleaning'],
            ['parent_id' => 1,'quote_form_id' => 0, 'name' => 'Floor scrubing and polishing'],
            ['parent_id' => 0,'quote_form_id' => 1, 'name' => 'Exterior cleaning'],
            ['parent_id' => 11,'quote_form_id' => 0, 'name' => 'Water blasting'],
            ['parent_id' => 11,'quote_form_id' => 0, 'name' => 'Roof cleaning'],
            ['parent_id' => 11,'quote_form_id' => 0, 'name' => 'House washing'],
            ['parent_id' => 11,'quote_form_id' => 0, 'name' => 'Driveway and path cleaning'],
            ['parent_id' => 11,'quote_form_id' => 0, 'name' => 'Gutter cleaning'],
            ['parent_id' => 0,'quote_form_id' => 1, 'name' => 'Appliances'],
            ['parent_id' => 17,'quote_form_id' => 0, 'name' => 'Fridge'],
            ['parent_id' => 17,'quote_form_id' => 0, 'name' => 'Oven'],
            ['parent_id' => 17,'quote_form_id' => 0, 'name' => 'Dishwasher'],
            ['parent_id' => 17,'quote_form_id' => 0, 'name' => 'Other'],
            ['parent_id' => 0,'quote_form_id' => 1, 'name' => 'Furniture and Furnishing'],
            ['parent_id' => 22,'quote_form_id' => 0, 'name' => 'Fabric Sofa cleaning'],
            ['parent_id' => 22,'quote_form_id' => 0, 'name' => 'Leather Sofa cleaning'],
            ['parent_id' => 22,'quote_form_id' => 0, 'name' => 'Carpet cleaning'],
            ['parent_id' => 22,'quote_form_id' => 0, 'name' => 'Carpet Shampooing'],
            ['parent_id' => 22,'quote_form_id' => 0, 'name' => 'Curtain cleaning'],
            ['parent_id' => 22,'quote_form_id' => 0, 'name' => 'Mattress cleaning'],
            ['parent_id' => 22,'quote_form_id' => 0, 'name' => 'Dining chair shampooing'],
            ['parent_id' => 22,'quote_form_id' => 0, 'name' => 'Office chair shampooing'],
            ['parent_id' => 0,'quote_form_id' => 1, 'name' => 'Gardening'],
            ['parent_id' => 31,'quote_form_id' => 0, 'name' => 'Area'],
            ['parent_id' => 31,'quote_form_id' => 0, 'name' => 'Lawn moving'],
            ['parent_id' => 31,'quote_form_id' => 0, 'name' => 'Edging'],
            ['parent_id' => 31,'quote_form_id' => 0, 'name' => 'Clipping'],
            ['parent_id' => 31,'quote_form_id' => 0, 'name' => 'Hedge trimming'],
            ['parent_id' => 31,'quote_form_id' => 0, 'name' => 'Gardening'],
            ['parent_id' => 31,'quote_form_id' => 0, 'name' => 'Weed spraying'],
            ['parent_id' => 0,'quote_form_id' => 1, 'name' => 'Painting'],
            ['parent_id' => 39,'quote_form_id' => 0, 'name' => 'Bedrooms (includes windows, walls, ceiling)'],
            ['parent_id' => 39,'quote_form_id' => 0, 'name' => 'Living room'],
            ['parent_id' => 39,'quote_form_id' => 0, 'name' => 'Kitchen'],
            ['parent_id' => 39,'quote_form_id' => 0, 'name' => 'Bathroom'],
            ['parent_id' => 39,'quote_form_id' => 0, 'name' => 'Balcony'],
            ['parent_id' => 39,'quote_form_id' => 0, 'name' => 'Garage'],
            ['parent_id' => 0,'quote_form_id' => 1, 'name' => 'Plumbing'],
            ['parent_id' => 46,'quote_form_id' => 0, 'name' => 'Taps'],
            ['parent_id' => 46,'quote_form_id' => 0, 'name' => 'Wash Basin'],
            ['parent_id' => 46,'quote_form_id' => 0, 'name' => 'Kitchen sink'],
            ['parent_id' => 46,'quote_form_id' => 0, 'name' => 'Blocks & Leakages'],
            ['parent_id' => 46,'quote_form_id' => 0, 'name' => 'Pipelines and pumps'],
            ['parent_id' => 46,'quote_form_id' => 0, 'name' => 'Bath'],
            ['parent_id' => 46,'quote_form_id' => 0, 'name' => 'Toilet'],
            ['parent_id' => 46,'quote_form_id' => 0, 'name' => 'Shower'],
            ['parent_id' => 46,'quote_form_id' => 0, 'name' => 'Hot water system'],
            ['parent_id' => 46,'quote_form_id' => 0, 'name' => 'Drain unblocking'],
            ['parent_id' => 0,'quote_form_id' => 1, 'name' => 'Pest Control'],
            ['parent_id' => 57,'quote_form_id' => 0, 'name' => 'Fly control'],
            ['parent_id' => 57,'quote_form_id' => 0, 'name' => 'Flea control'],
            ['parent_id' => 57,'quote_form_id' => 0, 'name' => 'Rodent control'],
            ['parent_id' => 57,'quote_form_id' => 0, 'name' => 'Cockroach control'],
            ['parent_id' => 57,'quote_form_id' => 0, 'name' => 'Ant Control'],
            ['parent_id' => 57,'quote_form_id' => 0, 'name' => 'Wasp Control'],
            ['parent_id' => 0,'quote_form_id' => 1, 'name' => 'Electrical'],
            ['parent_id' => 64,'quote_form_id' => 0, 'name' => 'Switches and power point'],
            ['parent_id' => 64,'quote_form_id' => 0, 'name' => 'Lights'],
            ['parent_id' => 64,'quote_form_id' => 0, 'name' => 'Smoke alarm'],
            ['parent_id' => 64,'quote_form_id' => 0, 'name' => 'Tv Antenna'],
            ['parent_id' => 64,'quote_form_id' => 0, 'name' => 'Phone jack'],
            ['parent_id' => 64,'quote_form_id' => 0, 'name' => 'Fridge'],
            ['parent_id' => 64,'quote_form_id' => 0, 'name' => 'Oven/Cooktop'],
            ['parent_id' => 64,'quote_form_id' => 0, 'name' => 'Rangehood'],
            ['parent_id' => 64,'quote_form_id' => 0, 'name' => 'Washer/Dryer'],
            ['parent_id' => 64,'quote_form_id' => 0, 'name' => 'Heatpump'],
            ['parent_id' => 64,'quote_form_id' => 0, 'name' => 'Wiring'],
            ['parent_id' => 64,'quote_form_id' => 0, 'name' => 'Others'],
            ['parent_id' => 64,'quote_form_id' => 0, 'name' => 'Tagging and testing']



        ];


        Category::insert($categories);

        
    }
}
