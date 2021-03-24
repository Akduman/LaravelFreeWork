<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class seeders_product_category extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::statement('set foreign_key_checks=0');
        DB::table('product_categories')->insert(
            [
                [                   
                    'product_Id'=>'40',                             
                    'category_Id'=>'1'     
                ],
                [
                  
                    'product_Id'=>'58',  
                    'category_Id'=>'2'              

                ],
                [
                  
                    'product_Id'=>'81',              
                    'category_Id'=>'2' 
                ],        
                [
                    //'id'=>4, 
                    'product_Id'=>'143',
                    'category_Id'=>'3'           

                ]               
              
            ]


        );
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
