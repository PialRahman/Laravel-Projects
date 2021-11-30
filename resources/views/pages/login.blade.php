@extends('layouts.master')
@section('content')
<div class="lginds">
<div class="w3-container">
  <div class="w3-card-4">
    <center><h1>Log in</h1></center>
    <center><h4>To order Products you must have to Log in</h4></center>
    <form action="{{route('dashboard')}}" method="post">
       @if(Session::get('success'))
      <center><div class="txtclr2">{{Session::get('success')}}</div></center>
      @endif
      @if(Session::get('fail'))
     <center><div class="txtclr2">{{Session::get('fail')}}</div></center>
      @endif
      {{csrf_field()}}
 <center><label for="name" >Name:</label>
  <input type="text" id="name" name="name" placeholder="Enter name"><div class="txtclr6"><span class="text-danger>">@error('name'){{$message}}@enderror</span></div></center><br>
  <center><label for="password" >Password:</label>
  <input type="password" id="password" name="password" placeholder="Enter password"><div class="txtclr"><span class="text-danger>">@error('password'){{$message}}@enderror</span></div></center><br>
  <center><input type="submit" value="Log in"><br><br>
  <a href="{{route('register')}}">Don't have any account? create new?</a></center>
</form> 

  </div>
    </div> 

 </div>
 

@endsection