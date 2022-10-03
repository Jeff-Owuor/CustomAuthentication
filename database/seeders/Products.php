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
            'productName'=>'xbox series x',
            'price'=>'60000',
            'category'=>'electronics',
            'description'=>'Next-gen console',
            'gallery'=>'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.OsXNuPjEt02CPetI5foH_gHaD2%26pid%3DApi&f=1&ipt=d982578d2b97f72a678aee4052b9b722511956ec0daa1a4afc2268da4f4f1c0e&ipo=images',

        ]); 
    }
}
