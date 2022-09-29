<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Products extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('product_models')->insert([
            'productName'=>'tecno',
            'price'=>'50000',
            'category'=>'electronics',
            'description'=>'rare camera like no other',
            'gallery'=>'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse4.mm.bing.net%2Fth%3Fid%3DOIP.wKH_I-KbeJ1BQYMTi0KwVgHaHa%26pid%3DApi&f=1&ipt=af838d751218b40c339e44ebc46d1dec13c2d72f7844eb2b8edfdb16f07e0304&ipo=images',

        ]); 
    }
}
