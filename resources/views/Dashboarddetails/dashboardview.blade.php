<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #004D26; /* bar color */
  width: 80%;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;  /* nav bar font color */
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;

}

li a:hover:not(.active) {
  background-color: #77FF33;
}

li a.active {
  color: white;
  background-color: #04AA6D;
}
.topside{
  background-color:#4DFFC3; /* Top side design */
  padding:2%;
  width: 100%;
  padding-bottom:10px;
  color:#00331A;
  font-size:20px;
  font-family: Calibri;
}
.srchbrs{
  margin-top: 9px;
  margin-left: 600px;
}
.prcdctply{
 width: 40%;
  margin-left:300px; 
}
.prcdctply2{
  width: 110%;
  margin-left:350px; 
  margin-top:-418px;
}
.crtpstnn{
  float:left;
  margin-left:-10px;
}
.sdbr{
  list-style-type: none;
}
.lginds{
margin-left: 100px;
height: 700px;
padding-left:20px;
}
.txtclr{
  color: red;
}
.txtclr6{
  color: red;
}
.txtclr2{
  color: red;
}
.crtdsn{
  background-color:#CC2000;
  border:none;
  color: white;
  float: left;
}
.vwdsn{
  background-color:green;
  text-decoration: none;
  border:none;
  color: white;
  float: right;
  margin-right:-1px;
  margin-top:0px;
  padding:3px;
}
.dtsdsn{
  float:right;
  margin-left: 500px;
  margin-top:-400px;
}
.backdsn{
   background-color:blue;
   text-decoration: none;
   border:none;
   color: white;
   margin-left: 400px;

}
.eddtdsn{
 background-color:blue;
  text-decoration: none;
  border:none;
  color: white;
  padding:1px;
}
.dltdsn{
   background-color:orange;
  text-decoration: none;
  border:none;
  color: white;
}
.cartclcltn{
  
  text-decoration: none;
  padding: 2px 10px;
  width: 7%;
   background-color: blue;
  color: white;
  margin-left:880px;
  margin-top: 28px;
  font-size: 20px;

}
.crticn{
  margin-left:850px;
  margin-top:-27px;
}
.chkdsn{
   background-color:#CC2000;
  border:none;
  color: white;
  float: left;
}

</style>

  <title>Sports Stationery Store</title>
</head>

<body bgcolor="#D5FFCC">
<div class="topside"><center><h1>Sports Stationary Shop</h1>

</center>
</div>
<img src="{{asset('images/Sportswebbanner.jpg')}}" alt="Webbanner" height="300px" width="1450px">
<ul>
  <li><a class="home" href="{{route('index')}}">Home</a></li>
 
  <li><a href="{{route('contact')}}">Contact</a></li> 
  <li><a href="{{route('addproduct')}}">Add Product</a></li>
  <li><a href="{{route('modifyproduct')}}">Modify Products</a></li>
  <li><a href="{{route('productsviewfororder')}}">Products</a></li>
  <li><a href="{{route('login')}}">Log in</a></li>
  <li><a href="{{route('register')}}">Register</a></li>
 <div class="srchbrs"> <form type="get" action="{{url('/search')}}">
      <input type="text" placeholder="Search Product.." name="query">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</ul>


<div class="prcdctply">
  @yield('content')
<footer>&copy; All rights Reserved Sports Stationery Shop</footer>
</div>
</div>

</body>
</html>
</head>







<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>
<center><h1>Hi,{{$Loggeduserinfo->name}},Welcome to dashboard</h1></center>
<center><table>
	<thead>
		<th>Username:</th>
		<td>{{$Loggeduserinfo->name}}</td>
		<th></th>
	</thead>
	
	<tbody>
	<tr>
		<th>Email:</th>
		<td>{{$Loggeduserinfo->email}}</td>
	</tr>
</tbody>
	</table>
	<a href="{{route('login')}}">Log out</a>
</center>
	
</body>
</html>