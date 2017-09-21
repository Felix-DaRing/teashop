@extends('layout.app')

@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">စားေသာက္ဖြယ္ရာ ထည့္သြင္းျခင္း</div>
		<div class="panel-body">
			<form method="post" enctype="multipart/form-data" action="{{ url('/menus') }}">
			{{csrf_field()}}
				<div class="form-group">
					<label for="code">ကုဒ္နံပါတ္</label>
					<input id="code" class="form-control" type="text" name="code" placeholder="Enter Code">
				</div>
				<div class="form-group">
					<label for="name">Menu အမည္</label>
					<input class="form-control" type="text" name="name" placeholder="Enter Menu Name">
				</div>
				<div class="form-group">
					<label for="image">ရုပ္ပံု</label>
					<input type="file" name="image">
				</div>
				<div class="form-group">
					<label for="category_id">အမ်ိဳးအစား</label>
					<select id="category_id" class="form-control" name="category_id">
						<option value="0">--Choose Category--</option>
					@foreach($cats as $cat)
						<option value="{{ $cat->id }}">{{ $cat->name }}</option>
					@endforeach
					</select>
				</div>
				<div class="form-group">
					<label for="price">ေဈးႏွဳန္း</label>
					<input class="form-control" type="text" name="price" placeholder="Enter Price">
				</div>
				<div class="form-group">
					<label for="active">ရရွိႏိုင္မွဳ</label>
					<select class="form-control" name="active">
						<option  value="0">--Choose Availability--</option>
						<option style="background-color: green;color: white" value="1">Active</option>
						<option style="background-color: red;color: white" value="2">Inactive</option>
					</select>
				</div>
				<button class="btn btn-success" type="submit">Add</button>
				<a href="{{ url('/menus') }}" class="btn btn-danger">Cancel</a>
			</form>
		</div>
	</div>
@endsection