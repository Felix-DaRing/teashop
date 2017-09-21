@extends('layout.app')
@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">ကုန္ၾကမ္းပစၥည္းထည့္သြင္းျခင္း</div>
		<div class="panel-body">
			<form method="post" action="{{ url('/rawitems') }}">
			{{csrf_field()}}
				<div class="form-group">
					<label for="code">ကုဒ္နံပါတ္</label>
					<input id="code" class="form-control" type="text" name="code" placeholder="Enter Code">
				</div>
				<div class="form-group">
					<label for="name">ပစၥည္းအမည္</label>
					<input class="form-control" type="text" name="name" placeholder="Enter Item Name">
				</div>
				<button class="btn btn-success" type="submit">Add</button>
				<a href="{{ url('/rawitems') }}" class="btn btn-danger">Cancel</a>
			</form>
		</div>
	</div>
@endsection