<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Products;

class ProduitsController extends Controller
{

    public function index()
    {
        $produits = Products::all();
        return view('Produits.index',['produits'=> $produits]);
    }

    public function create()
    {
        return view('Produits.create');
    }

    public function store(Request $request)
    {
        $products = new Products;
        //REJEX
        //'email'  => 'required|email|unique:students',

   /*      $request->validate(([
        'nom'  => 'required',
        'description'  => 'required',
        'prix'  => 'required',
        'category'  => 'required',
        'image'  => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ])); */



        $products->nom = $request->input("nom");
        $products->description = $request->input("description");
        $products->prix = $request->input("prix");
        $products->category = $request->input("category");
 if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().".".$extension;
            $file->move('uploads', $filename);
            $products->image = $filename;
 }
 else{
            return $request;
            $products->image = "";
 }
        $products->save();
        // $input = $request->all();
        // Products::create($input);
        return redirect("/produits")->with('success', "The product has been added on successfully");


    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $product = Products::find($id);

        return view('Produits.update',["id" => $id,"product"=>$product]);
    }



    public function update(Request $request, $id)
    {
        $products = Products::find($id);
        $products->nom = $request->input("nom");
        $products->description = $request->input("description");
        $products->prix = $request->input("prix");
        $products->category = $request->input("category");

        $products->update();
        return redirect('/produits')->with("status","Data updated successfully");

    }

    public function destroy($id)
    {
        $Products = Products::find($id);
        $Products->delete();
        return redirect('/produits');
    }
}
