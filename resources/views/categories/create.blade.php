@extends('layout.app')

@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">အမ်ိဳးအစားထည့္သြင္းျခင္း</div>
		<div class="panel-body">
			<form method="post" action="{{ url('/categories') }}">
			{{csrf_field()}}
				<div class="form-group">
					<label for="code">ကုဒ္နံပါတ္</label>
					<input id="code" class="form-control" type="text" name="code" placeholder="Enter Code">
				</div>
				<div class="form-group">
					<label for="name">အမ်ိဳးအစားအမည္</label>
					<input class="form-control" type="text" name="name" placeholder="Enter Category Name">
				</div>
				<button class="btn btn-success" type="submit">Add</button>
				<a href="{{ url('/categories') }}" class="btn btn-danger">Cancel</a>
			</form>
		</div>
	</div>
@endsection