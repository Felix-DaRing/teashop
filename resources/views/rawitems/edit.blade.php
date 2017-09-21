@extends('layout.app')
@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">ကုန္ၾကမ္းပစၥည္းျပင္ဆင္ျခင္း</div>
		<div class="panel-body">
			<form method="post" action="/rawitems/{{ $rawitem->id }}">
				{{ csrf_field() }}
				{{ method_field('PUT') }}
				<div class="form-group">
					<label for="code">ကုဒ္နံပါတ္</label>
					<input id="code" class="form-control" type="text" name="code"  value="{{ $rawitem->code }}">
				</div>
				<div class="form-group">
					<label for="name">အမ်ိဳးအစားအမည္</label>
					<input class="form-control" type="text" name="name" value="{{ $rawitem->name }}">
				</div>
				<button class="btn btn-success" type="submit">Update</button>
				<a href="{{ url('rawitems') }}" class="btn btn-danger">Cancel</a>
			</form>
		</div>
	</div>
@endsection