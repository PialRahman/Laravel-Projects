@extends('layouts.master')
@section('content')
<div class="lginds">
<div class="w3-container">
  <div class="w3-card-4">
    <center><h1>Registration</h1></center>
    <form action="{{route('save')}}" method="post">
      @if(Session::get('success'))
      <div class="alert alert-success">
      {{Session::get('success')}}
    </div> 
    @endif
     @if(Session::get('fail'))
      <div class="alert alert-danger">
      {{Session::get('fail')}}
    </div> 
    @endif
      {{csrf_field()}}
 <center><label for="name" >Name:</label>
  <input type="text" id="name" name="name" placeholder="Enter name"> <div class="txtclr"><span class="text-danger">@error('name'){{$message}}@enderror</span></div></center><br><br>
  
  <center> <label for="email" >Email:</label>
  <input type="text" id="email" name="email" placeholder="Enter email"><div class="txtclr"> <span class="text-danger">@error('email'){{$message}}@enderror</span></div></center><br><br>
 
  <center><label for="password" >Password:</label>
  <input type="password" id="password" name="password" placeholder="Enter password"><div class="txtclr"> <span class="text-danger">@error('password'){{$message}}@enderror</span><br></div></center><br>
  <center><input type="submit" value="Register"><br>
  <a href="{{route('login')}}">Already have an account?Log in?</a></center>
</form> 

  </div>
    </div> 

 </div>
 

@endsection