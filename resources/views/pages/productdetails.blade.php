@extends('layouts.master')
@section('content')
<div class="w3-container">
  <h2>Product Details</h2>
<div class="crtpstnn">
    
           <center><h1>{{$product->name}}</h1></center>
      <img class="card-img-top" src="{{ asset('uploads/product/'. $product->image)}}" alt="Sony phone image" height="380" width="430"><br><br>
      
      <center><button class="crtdsn">Add to Cart</button></center>
      
<div class="dtsdsn">
      <center><h1>Description:</h1><h5>{{$product->description}}</h5>
   <h1>Price: {{$product->price}}tk</h1></div></center>
     	<form action="{{route('index')}}" method="GET"><button class="backdsn">Back</button>
     	</form>    
  </div></center>
</div>

@endsection