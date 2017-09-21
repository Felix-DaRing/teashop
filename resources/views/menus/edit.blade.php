@extends('layout.app')
@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">စားေသာက္ဖြယ္ရာ ျပင္ဆင္ျခင္း</div>
		<div class="panel-body">
			<form method="post" enctype="multipart/form-data" action="/menus/{{ $menu->id }}">
				{{ csrf_field() }}
				{{ method_field('PUT') }}
				<div class="form-group">
					<label for="code">ကုဒ္နံပါတ္</label>
					<input id="code" class="form-control" type="text" name="code" placeholder="Enter Code" value="{{ $menu->code }}">
				</div>
				<div class="form-group">
					<label for="name">Menu အမည္</label>
					<input class="form-control" type="text" name="name" placeholder="Enter Category Name" value="{{ $menu->name }}">
				</div>
				<div class="form-group">
					<label for="image">လက္ရွိ ရုပ္ပံု</label>
					<img src="{{ url("storage/images/".$menu->image) }}" class="thumbnail" height="200" width="250" />
					<input type="file" name="image" value="{{ $menu->image }}">
				</div>
				<div class="form-group">
					<label for="category_id">အမ်ိဳးအစား</label>
					<select class="form-control" name="category_id">
						<option value="{{ $menu->category->id }}">{{ $menu->category->name }}</option>
					@foreach($categories as $category)
						<option value="{{ $category->id }}">{{ $category->name }}</option>
					@endforeach
					</select>
				</div>
				<div class="form-group">
					<label for="price">ေဈးႏွဳန္း</label>
					<input class="form-control" type="text" name="price" placeholder="Enter Category Name" value="{{ $menu->price }}">
				</div>
				<div class="form-group">
					<label for="active">ရရွိႏိုင္မွဳ</label>
					<select class="form-control" name="active">
						<option value="{{ $menu->active }}">
						@if ($menu->active == 1)
								<div class="label label-success">Active</div>
						@else
								<div class="label label-danger">Inactive</div>
						@endif</option>
						<option style="background-color: green;color: white" value="1">Active</option>
						<option style="background-color: red;color: white" value="2">Inactive</option>
					</select>
				</div>
				<button class="btn btn-success" type="submit">Update</button>
				<a href="{{ url('menus') }}" class="btn btn-danger">Cancel</a>
			</form>
		</div>
	</div>
@endsection