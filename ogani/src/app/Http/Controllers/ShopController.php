<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    protected $product;
    protected $category;
    public function __construct(Product $product, Category $category){
        $this->product = $product;
        $this->category = $category;
    }
    public function shop(){
        $products = $this->product->where('status', 1)->get();
        $saleProducts = $this->product->where('discount', '>', 0)->where('status', 1)->get();
        return view('home.shop', compact('products','saleProducts'));
    }
    public function shopDetails(string $id){
        $product = Product::where('status', 1)->find($id);
        if(!$product){
            return redirect()->route('error.404');
        }
        $description = strip_tags($product->description);
        $information = strip_tags($product->information);
        $images = Image::where('product_id', $id)->get();
        $relatedProducts = Product::where('category_id', $product->category_id)->limit(4)->get();
        return view('home.shop-details', compact('product', 'description', 'information', 'images', 'relatedProducts'));
    }
}
