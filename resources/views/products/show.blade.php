@extends('products.layout')

@section('content')

<div class="row">

	<div class="col-lg-12 mt-5">
		<div class="float-left">
			<h2>Show Products</h2>
		</div>

		<div class="float-right">
			<a class="btn btn-primary" href="{{ route('products.index') }}">Back</a>
		</div>

	</div>

	<div class="col-lg-12 mt-5">
		<div class="col-sm-3">
			<strong>Name:</strong>
		</div>

		<div class="col-lg-12">
			{{ $product->name }}
		</div>
		<br>
		<div class="col-sm-3">
			<strong>Details:</strong>
		</div>
		<div class="col-lg-12">
			{{ $product->detail }}
		</div>

	</div>
	
</div>


@endsection