<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductsImage;
use App\Models\ProductsAttribute;
use App\Models\Category;
use App\Models\Brand;
use App\Models\AdminsRole;
use Session;
use DB;
use Image;
use Auth;

class ProductsController extends Controller
{
    public function products(){
        Session::put('page','products');
        $products = Product::with('category')->get()->toArray();
        // dd($products);

        // Set Admin/Subadmins Permission for Products
       $productsModuleCount = AdminsRole::where(['subadmin_id'=>Auth::guard('admin')->user()->id,'module'=>'products'])->count();
       $productsModule = array();
       if(Auth::guard('admin')->user()->type=="admin"){
            $productsModule['view_access'] = 1;
            $productsModule['edit_access'] = 1;
            $productsModule['full_access'] = 1;
       }else if($productsModuleCount==0){
            $message = "This feature is restricted for you!";
            return redirect('admin/dashboard')->with('error_message',$message);
       }else{
            $productsModule = AdminsRole::where(['subadmin_id'=>Auth::guard('admin')->user()->id,'module'=>'products'])->first()->toArray();
       }


        return view('admin.products.products')->with(compact('products','productsModule'));
    }

     public function updateProductStatus(Request $request)
    {
        if($request->ajax()){
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;
            if($data['status']=="Active"){
                $status = 0;
            }else{
                $status = 1;
            }
            Product::where('id',$data['product_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status,'product_id'=>$data['product_id']]);
        }
    }

    public function deleteProduct($id)
    {
        //Delete Product
        Product::where('id',$id)->delete();
        return redirect()->back()->with('success_message','Product deleted successfully!');
    }

    public function addEditProduct(Request $request,$id=null){
        // dd($request->all(),
        Session::put('page','products');
        if($id==""){
            // Add Product
            $title = "Add Product";
            $product = new Product;
            $productdata = array();
            $message = 'Product added successfully!';
        }else{
           // Edit Product
            $title = "Edit Product";
            $product = Product::with(['images',])->find($id);
            // dd($product['images']);
            $message = 'Product Updated successfully!';
        }

        if($request->isMethod('post')){
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;


            //  // Product Validation
            $rules = [
                'category_id' => 'required',
                'product_name' => 'required|regex:/^[\pL\s-]+$/u|max:200',
                'product_code' => 'required|regex:/^[\w-]*$/|max:30',
                
            ];

           

            // Upload Product Video
            if($request->hasFile('product_video')){
                $video_tmp = $request->file('product_video');
                if($video_tmp->isValid()){
                    //Upload Video
                    $videoName = $video_tmp->getClientOriginalName();
                    $videoExtension = $video_tmp->getClientOriginalExtension();
                    $videoName = rand().'.'.$videoExtension;
                    $videoPath = "front/videos/products/";
                    $video_tmp->move($videoPath,$videoName);
                    //Save Video name in products table
                    $product->product_video = $videoName;
                }
            }

           

            $product->category_id = $data['category_id'];
            $product->brand_id = $data['brand_id'];
            $product->product_name = $data['product_name'];
            $product->product_code = $data['product_code'];
            $product->description = $data['description'];
            $product->meta_title = $data['meta_title'];
            $product->meta_keywords = $data['meta_keywords'];
            $product->meta_description = $data['meta_description'];
            if(!empty($data['is_featured'])){
                $product->is_featured = $data['is_featured'];
            }else{
                $product->is_featured = "No";
            }
            if(!empty($data['is_bestseller'])){
                $product->is_bestseller = $data['is_bestseller'];
            }else{
                $product->is_bestseller = "No";
            }
            $product->status = 1;
            $product->save();

            if($id==""){
               $product_id = DB::getPdo()->lastInsertId();
            }else{
               $product_id = $id;
            }

            // Upload Product images
            if($request->hasFile('product_images')){
                $images = $request->file('product_images');
                // echo "<pre>"; print_r($images); die;

                foreach ($images as $key =>$image) {

                    // Generate Temp Image
                    $image_temp = Image::make($image);

                    // Get Image Extension
                    $extension =$image->getClientOriginalExtension();

                    // Generate New Image Name
                    $imageName = 'product-'.rand(1111,9999999).'.'.$extension;

                    // Image Path for Small, Medium and Large Images
                    $largeImagePath = 'front/images/products/large/'.$imageName;
                    $mediumImagePath = 'front/images/products/medium/'.$imageName;
                    $smallImagePath = 'front/images/products/small/'.$imageName;

                    // Upload the large, Medium and Small after Resize
                    Image::make($image_temp)->resize(1040,1200)->save($largeImagePath);
                    Image::make($image_temp)->resize(520,600)->save($mediumImagePath);
                    Image::make($image_temp)->resize(260,300)->save($smallImagePath);

                    // Insert Image Name in products_images table
                    $image = new ProductsImage;
                    $image->image = $imageName;
                    $image->product_id = $product_id;
                    $image->status = 1;
                    $image->save();
                }
            }


            // Sort Product Images
            if($id!=""){
                if(isset($data['image'])){
                    foreach ($data['image'] as $key => $image){
                        ProductsImage::where(['product_id'=>$id,'image'=>$image])->update(['image_sort'=>$data['image_sort'][$key]]);
                    }
                }
            }


            return redirect('admin/products')->with('success_message',$message);
        }

        //Get Categories and their Sub Categories
        $getCategories = Category::getCategories();

        // Get Brands
        $getBrands = Brand::where('status',1)->get()->toArray();

  

        return view('admin.products.add_edit_product')->with(compact('title','getCategories','product','getBrands'));
     }

     public function deleteProductVideo($id){
        // Get Product Video
         $productVideo = Product::select('product_video')->where('id',$id)->first();

        // Get Product Video Path
        $product_video_path = 'front/videos/products/';

        // Delete Product Video from folder if exists
        if(file_exists($product_video_path.$productVideo->product_video)){
            unlink($product_video_path.$productVideo->product_video);
        }

        // Delete Product Video Name from products table
        Product::where('id',$id)->update(['product_video'=>'']);

       $message = "Product Video has been deleted successfully!";
        return redirect()->back()->with('success_message',$message);
    }

     public function deleteProductImage($id){
    //     // Get Product Image
        $productImage = ProductsImage::select('image')->where('id',$id)->first();

        //Get Product Image Paths
        $small_image_path = 'front/images/products/small/';
        $medium_image_path = 'front/images/products/medium/';
        $large_image_path = 'front/images/products/large/';

        // Delete Product Small Image if exists in small folder
        if(file_exists($small_image_path.$productImage->image)){
            unlink($small_image_path.$productImage->image);
        }

        //Delete Product Medium Image if exists in medium folder
        if(file_exists($medium_image_path.$productImage->image)){
            unlink($medium_image_path.$productImage->image);
        }

        // Delete Product Large Image if exists in large folder
        if(file_exists($large_image_path.$productImage->image)){
            unlink($large_image_path.$productImage->image);
        }

        //Delete Product Image from products_images table
        ProductsImage::where('id',$id)->delete();

        $message = "Product Image has been deleted successfully!";
        return redirect()->back()->with('success_message',$message);

    }

}