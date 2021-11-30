@extends('layouts.master')
@section('content')
<div class="w3-container">
	<div class="w3-panel w3-card">
<form action="{{route('updateproduct')}}" method="POST" enctype="multipart/form-data">
	@if(Session::get('success'))
  <div class="alert alert-success">
    {{Session::get('success')}}
     @endif
    {{csrf_field()}}
  <input type=hidden name="id" value="{{$product->id}}">
<label for="name">Product name:</label><br>
  <input type="text"  name="name" value="{{$product->name}}" ><br><br>
  <label for="description">Description:</label><br>
  <input type="text" name="description" value="{{$product->description}}"><br>
  <label for="price">Price</label><br>
  <input type="number" name="price" value="{{$product->price}}"><br><br>
  <input type="submit" value="Edit Product">
</form>
</div>
</div>

@endsection