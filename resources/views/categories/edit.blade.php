@extends('layout.app')

@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">အမ်ိဳးအစားျပင္ဆင္ျခင္း</div>
		<div class="panel-body">
			<form method="post" action="/categories/{{ $category->id }}">
				{{ csrf_field() }}
				{{ method_field('PUT') }}
				<div class="form-group">
					<label for="code">ကုဒ္နံပါတ္</label>
					<input id="code" class="form-control" type="text" name="code" placeholder="Enter Code" value="{{ $category->code }}">
				</div>
				<div class="form-group">
					<label for="name">အမ်ိဳးအစားအမည္</label>
					<input class="form-control" type="text" name="name" placeholder="Enter Category Name" value="{{ $category->name }}">
				</div>
				<button class="btn btn-success" type="submit">Update</button>
				<a href="{{ url('categories') }}" class="btn btn-danger">Cancel</a>
			</form>
		</div>
	</div>
@endsection