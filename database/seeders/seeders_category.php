<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class seeders_category extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('categories')->insert(
            [
                [
                   // 'id'=>1, 
                    'name'=>'category1'            

                ],
                [
                   // 'id'=>2, 
                    'name'=>'category2'              

                ],
                [
                   // 'id'=>3, 
                    'name'=>'category3'               

                ],        
                [
                    //'id'=>4, 
                    'name'=>'category4'             

                ]               
              
            ]


        );
    }
}
