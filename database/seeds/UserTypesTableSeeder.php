<?php

use Illuminate\Database\Seeder;
use App\Models\UserType;
class UserTypesTableSeeder extends Seeder
{
 
    public function run()
    {
    	UserType::truncate();

    	$usertypes = [
    		['type' => 'user'],
            ['type' => 'servicer']
        ];

        UserType::insert($usertypes);
        
    }
}
