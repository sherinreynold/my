@extends('admin.common')

@section('content1')

<style>
.card{
	display:inline-block;
	width:33%;
	min-height:250px;
	background-color: green;
	opacity:0.8;
	padding:25px;
}

.card:hover{
	opacity:1;
}
.card center{
	font-size:50px;
	color:white;
	font-weight:bold;
}
.card h1{
	font-size:50px;
	color:white;
	font-weight:bold;
}
</style>


<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
				
                <div class="panel-body">
				<a href="{{url('/product')}}"><div class="card">
				<center>Products</center>
				<h1>51<h1>
				</div></a>
				<a href="{{url('/shop')}}"><div class="card">
				<center>Shops</center>
				<h1>51<h1>
				</div></a>
				<a href="{{url('/user')}}"><div class="card">
				<center>Users</center>
				<h1>51<h1>
				</div></a>
				
	 </div>
            </div>
        </div>
    </div>
</div>
@endsection
