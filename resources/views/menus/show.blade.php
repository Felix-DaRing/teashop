@extends('layout.app')

@section('content')
	
	<div class="jumbotron">
		<div class="pull-right">
			<img src="{{ url('storage/images/'.$menu->image) }}" class="thumbnail" height="200" width="200" />	
		</div>
	  <h1>{{ $menu->name }}</h1><hr>
	  <p><a href="/categories/{{ $menu->category->id }}">{{ $menu->category->name }}</a></p>
	  <p>{{ $menu->price }}</p>
	  <p>{{ $menu->active }}</p>
	  <p><a class="btn btn-primary btn-lg" href="#" role="button">အေရာင္း</a></p>
	</div>
@endsection