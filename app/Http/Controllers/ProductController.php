<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
 
  function index()
    {
      // Fetch all products from the database
  
      $products = Product::all();
      return response()->json($products);
   

    }
    function tableView(Request $request){
        $query = Product::query();

        // Check if the request has a 'search' parameter and it's not empty
        if ($request->has('search') && $request->search) {
            $query->where('name', 'like', '%' . $request->search . '%')
                  ->orWhere('category', 'like', '%' . $request->search . '%');
                  $products = $query->get();
        }
       else{
        $products=Product::all();
         }
      
        return view('productTable', compact('products'));}
}
