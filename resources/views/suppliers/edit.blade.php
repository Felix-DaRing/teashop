@extends('layout.app')
@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">ပစၥည္းေရာင္းခ်သူမ်ား</div>
		<div class="panel-body">
			<form method="post" action="/suppliers/{{ $supplier->id }}">
				{{ csrf_field() }}
				{{ method_field('PUT') }}
				<div class="form-group">
					<label for="code">ကုဒ္နံပါတ္</label>
					<input id="code" class="form-control" type="text" name="code" value="{{ $supplier->code }}">
				</div>
				<div class="form-group">
					<label for="name">အမည္</label>
					<input class="form-control" type="text" name="name" value="{{ $supplier->name }}">
				</div>
				<div class="form-group">
					<label for="name">အမ်ိဳးအစား</label>
					<input class="form-control" type="text" name="type" value="{{ $supplier->type }}">
				</div>
				<div class="form-group">
					<label for="name">ဖုန္ၚ</label>
					<input class="form-control" type="text" name="phone" value="{{ $supplier->phone }}">
				</div>
				<div class="form-group">
					<label for="name">လိပ္စာ</label>
					<input class="form-control" type="text" name="address" value="{{ $supplier->address }}">
				</div>
				<button class="btn btn-success" type="submit">Update</button>
				<a href="{{ url('suppliers') }}" class="btn btn-danger">Cancel</a>
			</form>
		</div>
	</div>
@endsection