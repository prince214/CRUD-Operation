@extends('products.layout')

@section('content')

<div class="row">
	<div class="col-lg-12 mt-5">
		<div class="float-left">
			<h2>Admin DashBoard | Laravel</h2>
		</div>
		<div class="float-right">
			<a class="btn btn-success" href="{{ route('products.create')}}">Create new Product</a>
		</div>
	</div>
</div>

@if($message = Session::get('success'))

<div class="alert alert-success"><p>{{ $message }}</p></div>
@endif


<table class="table table-bordered">
	
	<thead>
	<tr>
		<th scope="col">No</th>
		<th scope="col">Name</th>
		<th scope="col">Details</th>
		<th scope="col" width="280px">Action</th>
	</tr>
	</thead>

	<tbody>
	
	@foreach($products as $product)
	<tr>
	<th scope="row">{{ ++$i }}</th>
	<td>{{ $product->name }}</td>
	<td>{{ $product->detail }}</td>
	<td>
		<form action="{{ route('products.destroy',$product->id) }}" method="POST">
			<a class="btn btn-info" href="{{route('products.show',$product->id)}}">Show</a>

			<a class="btn btn-primary" href="{{route('products.edit',$product->id)}}">Edit</a>

			@csrf
			@method('DELETE')
			<button type="submit" class="btn btn-danger">Delete</button>
		</form>
	</td>
	</tr>
	@endforeach
	</tbody>
</table>

{{ $products->links() }}

@endsection