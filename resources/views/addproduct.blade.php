@extends('layouts.master')
@section('content')
<div class="w3-container">
	<div class="w3-panel w3-card">
<form action="{{route('addedproduct')}}" method="POST" enctype="multipart/form-data">
	@if(Session::get('success'))
  <div class="alert alert-success">
    {{Session::get('success')}}
     @endif
	{{csrf_field()}}
<label for="name">Product name:</label><br>
  <input type="text"  name="name" ><br>
  <label for="image">Image:</label><br>
  <input type="file" name="image"><br><br>
  <label for="description">Description:</label><br>
  <input type="text" name="description" ><br>
  <label for="price">Price</label><br>
  <input type="number" name="price"><br><br>
  <label for="quantity">Quantity</label><br>
  <input type="number" name="quantity"><br><br>
  <input type="submit" value="Add Product">
</form>
<form action="{{url('Dashboarddetails/dashboardview')}}" method="">
<button class="bckcr">Back</button>
</form>
</div>
</div>

@endsection