<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
            $products=Product::paginate(8);
            return view('product.index',compact('products'));
    }

    public function create(){
        return view('product.create');
}
    public function show($id){
        $products=Product::find($id);
            return view('product.show',compact('products'));
    }
    public function update(Request $request,$id){
        $user=Product::find($id)->update([
            'name'=>$request->input('name'),
            'description'=>$request->input('description'),
            'value'=>$request->input('value'),
    ]);
    return redirect('product')->with('status','se ha Actualizado correctamente');
    }
    public function store(Request $request){
        $user= Product::create(
            [
                'name' =>$request->input('name'),
                'description' =>$request->input('description'),
                'value' =>$request->input('value'),

            ]);

            return redirect('product')->with('status','se ha creado correctamente');
    }
    public function edit($id){
        $products=Product::find($id);
        return view('product.edit',compact('products'));
    }

    public function destroy($id){

        $products= Product::find($id)->delete();
        return redirect('product')->with('status','se ha eliminado correctamente');

    }
}
