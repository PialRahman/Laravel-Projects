<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use Cart;


class ToybuyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $product = product::get();
        $cart = Cart::content();

        return view('pages.index')->with('product',$product);
    }
    public function productsviewfororder(){
       $product = product::get();
        $cart = Cart::content();
        return view('pages.productsviewfororder')->with('product',$product);
    }
    public function productdetails($id)
    {
        
       $product= product::find($id);
       return view('pages.productdetails',['product'=>$product]);
    
    }
     public function viewcartitems(){
        $productcrt = product::get(); 
        // $cart = Cart::content();
        return view('pages.viewcartitems',compact('productcrt'));
    }
    public function contact()
    {
        return view('pages.contact');
    }

 public function addproduct()
    {

        return view('addproduct');
    }
    public function modifyproduct(){
         $product = product::get();
        return view('pages.modifyproduct')->with('product',$product);;

    }
    public function editproduct($id){
        $product=product::where('id',$id)->first();
        return view('pages.editproduct',compact('product'));
    }
    public function updateproduct(Request $request){
       product::where('id',$request->id)->update([
            'name'=> $request->name,
            'description'=> $request->description,
            'price'=>$request->price

        ]);
        return back()->with('success','Product has been updated');
    }
    public function deleteproduct($id){
        product::where('id',$id)->delete();
        return back()->with('success_rmv','Product has been deleted');
    }
    public function store(Request $request)
    {
       $product = new product();
       $product -> name = $request->input('name');
    // $product -> image = $request->input('image');
    if($request-> hasfile('image')){
       $file=$request->file('image');
       $extension=$file->getClientOriginalExtension();
       $filename= time().'.'.$extension;
       $file->move('uploads/product/',$filename);
       $product->image= $filename; 
    }
    else{
        return $request;
        $product->image='';
    }
    $product -> description = $request->input('description');
    $product -> price = $request->input('price');
    $product -> quantity = $request->input('quantity');
    $product->save();
    return back()->with('success','Product has been added');

    } 

    public function cartstore(Request $request){
       
        $productcrt = product::findOrFail($request->input('id'));
        Cart::add(
            $productcrt->id,
            $productcrt->name,
            $productcrt->quantity,
            $productcrt->price,
            );
          return redirect('productsviewfororder')->with('success','Product sucessfully added to the cart');
        
        

    }
     public function deletecartitems($id){
       
        $productcrt = product::where('id',$id)->delete();
        Cart::remove($id);
          return redirect('/viewcartitems')->with('success','Product has been removed');
        
        

    }

    public function search(){
        $search_text= $_GET['query'];
        $product=product::where('name','LIKE', '%'.$search_text.'%')->get(); 
        if($product){
            return view('pages.search',compact('product'));
        }
        else{
            return back()->with('fail','Sorry We could not find anything');
        }
       
    }
      
  
}
