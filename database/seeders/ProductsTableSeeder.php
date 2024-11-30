<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productsRecords = [
            ['id'=>1,'category_id'=>2,'brand_id'=>2,'product_name'=>'Solar','product_code'=>'SOLAR01','product_video'=>'','description'=>'Test Product','keywords'=>'','meta_title'=>'','meta_description'=>'','meta_keywords'=>'','is_featured'=>'Yes','status'=>1],
            ['id'=>2,'category_id'=>1,'brand_id'=>1,'product_name'=>'CCTV','product_code'=>'CCTV01','product_video'=>'','description'=>'Test1 Product','keywords'=>'','meta_title'=>'','meta_description'=>'','meta_keywords'=>'','is_featured'=>'Yes','status'=>1],
            
        ];
        Product::insert($productsRecords);
    }
}
