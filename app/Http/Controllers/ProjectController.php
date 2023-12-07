<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function products()
    {
        $cakes = DB::table('products')->where('category', 'cakes')->get();
        $cupcakes = DB::table('products')->where('category', 'cupcakes')->get();
        return view('products', ['cakes' => $cakes, 'cupcakes' => $cupcakes]);
    }

    public function single_product(Request $request, $id)
    {
        $product_array = DB::table('products')->where('id', $id)->get(); //arrayOfOneObj
        return view('single_product', ['product_array' => $product_array]);
    }

    public function contact()
    {
        return view('layout.contact');
    }

    public function submitContact(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        
        return redirect()->back()->with('success', 'Thank you for contacting us!');
    }
}
