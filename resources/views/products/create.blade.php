@extends('products.layout')


@section('title')
Create Product
@endsection

@section('content')
<div class="row">
	<div class="col-lg-12 mt-5">
		<div class="float-left">
			<h2>Add new Product</h2>
		</div>
		<div class="float-right">
			<a class="btn btn-primary" href="{{ route('products.index')}}">Back</a>
		</div>
	</div>
</div>

@if($errors->any())
	<div class="alert alert-danger">
		<strong>Whoops!</strong>There were some problems with your input<br><br>
		<ul>
			@foreach($errors->all() as $error)
			<li> {{ $error }} </li>
			@endforeach
		</ul>
		
	</div>
@endif


<form action="{{ route('products.store') }}" method="POST">	
	@csrf
	<div class="row">

		<div class="col-xs-12 col-md-12 col-sm-12">
			
			<div class="form-group">
				<strong>Product Name:</strong>
				<input type="text" name="name" class="form-control" placeholder="Enter Product Name">
			</div>
		</div>

		<div class="col-xs-12 col-md-12 col-sm-12">
			
			<div class="form-group">
				<strong>Product Details:</strong>
				<textarea class="form-control" style="height: 150px" name="detail" placeholder="Enter Product Details"></textarea> 
			</div>
		</div>

		<div class="col-xs-12 col-md-12 col-sm-12">
		
			<button type="submit" class="btn btn-primary">
				Submit
			</button>

		</div>
		
	</div>
 
</form>

@endsection