<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function category(){
        return $this->belongsTo('App\Models\Category','category_id')->with('parentcategory');

    }

    public function brand(){
        return $this->belongsTo('App\Models\Brand','brand_id');
    }

    
    public function images(){
        return $this->hasMany('App\Models\ProductsImage');
    }

    public static function productStatus($product_id){
        $productStatus = Product::select('status')->where('id',$product_id)->first();
        return $productStatus->status;
    }

    public static function getProductDetails($product_id){
        $getProductDetails = Product::where('id',$product_id)->first()->toArray();
        return $getProductDetails;
    }

    

     public static function getProductImage($product_id){
        $image = "";
        $productImageCount = ProductsImage::where('product_id',$product_id)->count();
        if($productImageCount>0){
            $getProductImage = ProductsImage::select('image')->where('product_id',$product_id)->orderBy('image_sort','Desc')->first();
            $image = $getProductImage->image;
        }
        return $image;
     }


}







