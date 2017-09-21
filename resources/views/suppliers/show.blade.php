	@extends('layout.app')
@section('content')
	<div class="jumbotron">

	  <h1>{{ $supplier->name }}</h1>
	  <hr>
	  <p>{{ $supplier->type }}</p>
	  <p>{{ $supplier->phone }}</p>
	  <p>{{ $supplier->address }}</p>
	  <p>{{ $supplier->created_at->diffForHumans() }}</p>
	  <p><a class="btn btn-primary btn-lg" href="#" role="button">အ၀ယ္</a></p>
	</div>
@endsection
