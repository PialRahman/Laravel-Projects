@extends('layouts.master')
@section('content')
<div class="w3-container">
  <h2>Searched Results</h2>
  <div class="w3-card-4" style="width:50%;">
    
@foreach($product as $products)
<div class="crtpstnn">
    <div class="w3-container">
      <div class="w3-card-4">
        @if(Session::get('fail'))
      <div class="alert alert-danger">
      {{Session::get('fail')}}
    </div> 
    @endif
           <center><h1>{{$products->name}}</h1></center>
      <img class="card-img-top" src="{{ asset('uploads/product/'. $products->image)}}" alt="Sony phone image" height="380" width="230">
      <center><h5>{{$products->description}}</h5></center>
      <center><footer class="w3-container w3-blue"><h1>Price: {{$products->price}} tk</h1>
      <center>
 <form action="{{'login'}}" method="GET">
  <button class="crtdsn">Add to Cart</button></form></center>
        <form acion="" method="GET" >
          <a href="productdetails/{{$products['id']}}" class="vwdsn">View Details</a>
        </form>
    </footer>

  </div></center>
  </div>
    </div> 

  </div>
    @endforeach
 
 

@endsection