<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
           
            [
                'name'=>'huawei P40 plus ',
                "price"=>"1500",
                "description"=>"Smartphone avec camera frontal 48px et arriere 84px ",
                "category"=>"Phone",
                "gallery" =>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcThp_93eGVhF7Y2GId1U-mzezxRIpXHaMsokQ&usqp=CAU"
                ]
                    
                        
       
        ]);
    }
}
