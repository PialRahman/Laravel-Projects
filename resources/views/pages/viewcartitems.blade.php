<!DOCTYPE html>
<html>
<head>
	<title>View Cart</title>
</head>
<style>
	.chkdsn{
   background-color:#CC2000;
  border:none;
  color: white;
  float: left;
  margin-left: 650px;
  padding:5px 5px ;
}
.bckcr{
	background-color:blue;
  border:none;
  color: white;
  float: left;
  margin-left: 655px;
  padding:5px 6px ;
}
	</style>

<body bgcolor="#D5FFCC">
	<center>
<p id="chckutmsg"></p>
<h1>Purhcased items</h1>
Items({{Cart::content()->count()}})
<table border="1">
	<tr>
		<th>Name:</th>
		<th>Price:</th>
		<th>Status:</th>
		

	</tr>
	<tr>
		@foreach(Cart::content() as $productsview)
		<td>{{$productsview->name}}</td>
		<td>{{$productsview->price}}</td>
		<td>active</td>

	</tr>
	@endforeach
</table>
<br><br>
<form action="" method="">
<button class="chkdsn" onclick="checkoutfunction()">Checkout</button>

<script>
	function checkoutfunction(){

  document.getElementById("chckutmsg").innerHTML = "Order has been placed";
}
</script>
</form>
<br><br><br>
<form action="{{url('Dashboarddetails/usersdashboards')}}" method="">
<button class="bckcr">Back</button>
</form>

</center>
</body>
</html>