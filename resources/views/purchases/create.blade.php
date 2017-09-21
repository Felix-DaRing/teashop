@extends('layout.app')
@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">
			အ၀ယ္စာရင္းသြင္းျခင္း
		</div>
		<div class="panel-body">
			<form method="post" action="{{ url("/purchases") }}">
				{{ csrf_field() }}
				<div class="row">
					<div class="col-lg-3">
						<div class="form-group">
							<label for="rawitem_id">ကုန္ၾကမ္းအမည္</label>
							<select class="select2 form-control" name="rawitem_id" required>
								<option value="0">--Choose--</option>
								@foreach($rawitems as $rawitem)
									<option value="{{ $rawitem->id }}">{{ $rawitem->name }} [{{ $rawitem->code }}]</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="form-group">
							<label for="category_id">Menu အမ်ိဳးအစား</label>
							<select class="select2 form-control" name="category_id" required>
								<option value="0">--Choose--</option>
								@foreach($categories as $category)
									<option value="{{ $category->id }}">{{ $category->name }} [{{ $category->code }}]</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="form-group">
							<label for="supplier_id">ပစၥည္းေရာင္းခ်သူ</label>
							<select class="select2 form-control" name="supplier_id" required>
								<option value="0">--Choose--</option>
								@foreach($suppliers as $supplier)
									<option value="{{ $supplier->id }}">{{ $supplier->name }} [{{ $supplier->code }}]</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="form-group">
							<label for="buyer">၀ယ္ယူသူ</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input placeholder="Eg: Kyaw Kyaw" class="form-control" type="text" name="buyer" required>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-2">
						<div class="form-group">
							<label for="price">ႏွဳန္း</label>
							<div class="input-group">
								<input placeholder="Eg: 2000" class="form-control" type="text" name="price" id="price" required>
								<span class="input-group-addon">က်ပ္</span>
							</div>
						</div>
					</div>
					<div class="col-lg-1">
						<div class="form-group">
							<label for="quantity">ဦးေရ</label>
							<input placeholder="0" class="form-control" type="text" name="quantity" id="quantity" style="height: 26px;" required>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="form-group">
							<label for="unit">ယူနစ္</label>
							<select class="select2 form-control" name="unit" required>
								<option value="0">--Choose--</option>
								<option value="ခု">ခု</option>
								<option value="ထုပ္">ထုပ္</option>
								<option value="လံုး">လံုး</option>
								<option value="ေခ်ာင္း">ေခ်ာင္း</option>
								<option value="ေတာင့္">ေတာင့္</option>
								<option value="လိပ္">လိပ္</option>
								<option value="ကဒ္">ကဒ္</option>
								<option value="ပါကင္">ပါကင္</option>
								<option value="ပိသာ">ပိသာ</option>
								<option value="က်ပ္သား">က်ပ္သား</option>
								<option value="ကီလို">ကီလို</option>
							</select>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="form-group">
							<label for="debt">ေၾကြးက်န္</label>
							<div class="input-group">
								<input value="0" placeholder="Eg: 1000" class="form-control" type="text" name="debt" id="debt" required>
								<span class="input-group-addon">က်ပ္</span>
							</div>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="form-group">
							<label for="total">သင့္ေငြ</label>
							<div class="input-group">
								<input class="form-control" type="text" name="total" id="total" required>
								<span class="input-group-addon">က်ပ္</span>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="form-group">
							<br>
							<button style="margin-top: 4px;" class="form-control btn btn-success " type="submit"><i class="glyphicon glyphicon-ok-sign"></i> စာရင္းသြင္းမည္</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	<h4>ယေန႕အ၀ယ္   <small align="right" style="padding-left: 5px; border-left: 4px solid #80bfff; background: #d1e0e0;">အေရအတြက္ - {{ $q }} ခု | အၾကိမ္ေရ - {{ $c }} ၾကိမ္ |<b style="color: #cc33ff;"> သင့္ေငြ - {{ $a }} က်ပ္ </b></small></h4>

	@include('purchases.purchasetable')
@endsection
