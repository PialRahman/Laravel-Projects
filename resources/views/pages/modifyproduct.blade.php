@extends('layouts.master')
@section('content')
<div class="w3-container">
  <h2>All Products</h2>
  <div class="w3-card-4" style="width:50%;">
    
@foreach($product as $products)
<div class="crtpstnn">
    <div class="w3-container">
      <div class="w3-card-4">
           <center><h1>{{$products->name}}</h1></center>
      <img class="card-img-top" src="{{ asset('uploads/product/'. $products->image)}}" alt="Sony phone image" height="380" width="230">
      <center><h5>{{$products->description}}</h5></center>
     <center><footer class="w3-container w3-blue"><h1>Price: {{$products->price}} tk</h1>
      <center><button class="crtdsn">Add to Cart</button></center>
        <form acion="" method="GET" >
          <a href="productdetails/{{$products['id']}}" class="vwdsn">View Details</a>
           <a href="editproduct/{{$products['id']}}" class="eddtdsn">Edit</a>
            <a href="deleteproduct/{{$products['id']}}" class="dltdsn">Delete</a>
        </form>
    </footer>
  </div></center>
  
  </div>
    </div> 

  </div>
    @endforeach
 
 <form action="{{url('Dashboarddetails/dashboardview')}}" method="">
<button class="bckcr">Back</button>
</form>

@endsection