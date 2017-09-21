@extends('layout.app')
@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">ပစၥည္းေရာင္းခ်သူမ်ား</div>
		<div class="panel-body">
			<form method="post" action="{{ url('/suppliers') }}">
			{{csrf_field()}}
				<div class="form-group">
					<label for="code">ကုဒ္နံပါတ္</label>
					<input id="code" class="form-control" type="text" name="code" placeholder="Enter Code">
				</div>
				<div class="form-group">
					<label for="name">ပစၥည္းေရာင္းခ်သူအမည္</label>
					<input class="form-control" type="text" name="name" placeholder="Enter Supplier Name">
				</div>
				<div class="form-group">
					<label for="type">လုပ္ငန္းအမ်ိဳးအစား</label>
					<input class="form-control" type="text" name="type" placeholder="Enter Supplier Type">
				</div>
				<div class="form-group">
					<label for="phone">ဖုန္းနံပါတ္</label>
					<input class="form-control" type="text" name="phone" placeholder="Enter Supplier Phone">
				</div>
				<div class="form-group">
					<label for="address">လိပ္စာ</label>
					<input class="form-control" type="text" name="address" placeholder="Enter Supplier Address">
				</div>
				<button class="btn btn-success" type="submit">Add</button>
				<a href="{{ url('/suppliers') }}" class="btn btn-danger">Cancel</a>
			</form>
		</div>
	</div>
@endsection