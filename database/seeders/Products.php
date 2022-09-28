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
            'productName'=>'Samsung S22 Ultra',
            'price'=>'Kes150000',
            'category'=>'electronics',
            'description'=>'100x zoom damn that is impressive',
            'gallery'=>'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse4.mm.bing.net%2Fth%3Fid%3DOIP.g57WuSP-uwfMFtMM9GoWuwHaEK%26pid%3DApi&f=1&ipt=eeeda6afaa4a3945af5fde07ffe02d6e5aef5886634c922b131adc2811be1731&ipo=images',

        ]); 
    }
}
