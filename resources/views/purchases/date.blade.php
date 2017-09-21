
@extends('layout.app')
@section('content')
<!-- search purchase with date -->
	@include('purchases.daterange')
<!-- search debt list -->
<div class="row">
	<div class="col-lg-4">
		<div class="panel panel-danger">
			<div class="panel-heading">
				ေၾကြးက်န္စာရင္းရွာေဖြရန္
			</div>

			@if($debts <= 0)
			<p align="middle" class="bg-success">**ေၾကြးက်န္မရွိပါ*</p>
			@else
			<div class="panel-body">
				<form action="{{ url("/purchases/debt") }}" method="post">
					{{csrf_field()}}
						<button type="submit" class="btn btn-info btn-block" name="debt"><i class="glyphicon glyphicon-search"></i> ရွာမည္</button>
				</form>
			</div>
			<div style="background: #F2DEDE;" class="panel-footer">
				<p style="color: #660000;font-style: italic; font-weight; 10px; font-size: 20px;">ေၾကြးက်န္ စုစုေပါင္း - {{ $debts }} က်ပ္</p>
			</div>
			@endif
		</div>
	</div>
	<div class="col-lg-8">
		<div class="panel panel-info">
			<div class="panel-heading">
				အမ်ိဳးအစားလိုက္ ရွာေဖြျခင္း
			</div>
			<div class="panel-body">
				<ul class="list-inline">
					@foreach($categories as $category)
					<li><a href="{{ url("/categories/$category->id/date") }}">{{ $category->name }}</a></li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>
</div>
@endsection
