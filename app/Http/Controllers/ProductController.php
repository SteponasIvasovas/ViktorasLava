<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product; //modelio iskvietimas
use App\Category;
use App\Manufacturer;

class ProductController extends Controller
{
//validate turi ivykti pries save
//kaireje rasoma input laikeliu vardai is HTML formos, desineje - validacijos taisykles


//turi buti visada
 public function index(){


 }

 public function read(Request $request) {
   /*SELECT * FROM products WHERE id=*/
   $product = Product::find($request->id);
  // dd($request);

   return view('product.read', ['product' => $product]); //atvaizdavimas view faile
 }

 public function edit(Request $request) {
   $product = Product::find($request->id);
   return view('product/edit', ['product' => $product]);
 }

 public function update(Request $request){
 //validate nurodo laukelius, kurie yra privalomi
   $this->validate($request, [
       'product_title' => 'required',
       'product_description' => 'required',
       'product_quantity' => 'required|integer',
       'product_price' =>'required|numeric'
    // {{--   'product_category' => 'required|integer',
    //    'manufacturers' => 'required|integer', --}}
   ],
    ["required"=>"Laukelis privalomas",
    "integer"=>"Iveskite skaiciu",
    "numeric"=>"Kaina nurodykite skaiciais"
    ]
     );

   //Laravelyje vietoj print-r naudojama dd


       $product = Product::find($request->id);
       $product->title = $request->product_title;
       $product->description = $request->product_description;
       $product->quantity = $request->product_quantity;
       $product->price = $request->product_price;
       $product->category = 1;
       $product->manufacturer =1;
       $product->save();
       return redirect()->route('home');
 }

 public function destroy(Request $request) {
   $product = Product::find($request->id);
   $product->delete();
   return redirect()->route('home');
 }


 public function create() {
//                    Kelias
  $categories = Category::all();
  $manufacturers = Manufacturer::all();

  return view('product/create', ['categories' => $categories, 'manufacturers' => $manufacturers]);
     }

//Request viduje - $_POST, $_GET, $_>FILES
//Request yra uzklausa
 public function store(Request $request){

//validate nurodo laukelius, kurie yra privalomi
   $this->validate($request, [
       'product_title' => 'required',
       'product_description' => 'required',
       'product_quantity' => 'required|integer',
       'product_price' =>'required|numeric'
    // {{--   'product_category' => 'required|integer',
    //    'manufacturers' => 'required|integer', --}}
   ],
    ["required"=>"Laukelis privalomas",
    "integer"=>"Iveskite skaiciu",
    "numeric"=>"Kaina nurodykite skaiciais"
    ]
     );

   //Laravelyje vietoj print-r naudojama dd


       $product = new Product;

       $product->title = $request->product_title;
       $product->description = $request->product_description;
       $product->quantity = $request->product_quantity;
       $product->price = $request->product_price;
       $product->category = 1;
       $product->manufacturer =1;
       $product->save();
       return redirect()->route('home');
 }
}
