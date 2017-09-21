@extends('layout.app')
@section('content')
<div class="panel panel-info">
  <div class="panel-heading">
    အ၀ယ္စာရင္း ျပင္ဆင္ျခင္း
  </div>
  <div class="panel-body">
    <form method="post" action="{{ url("/purchases/$purchase->id/updateApply") }}">
      {{ csrf_field() }}
      {{ method_field('PUT') }}
      <div class="row">
        <div class="col-lg-3">
          <div class="form-group">
            <label for="rawitem_id">ကုန္ၾကမ္းအမည္</label>
              <input type="text" name="rawitem_id" value="{{ $purchase->rawitem['name'] }}" class="form-control" disabled>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="form-group">
            <label for="category_id">Menu အမ်ိဳးအစား</label>
              <input type="text" name="category_id" value="{{ $purchase->category['name'] }}" class="form-control" disabled>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="form-group">
            <label for="supplier_id">ပစၥည္းေရာင္းခ်သူ</label>
              <input type="text" name="supplier_id" value="{{ $purchase->supplier['name'] }}" class="form-control" disabled>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="form-group">
            <label for="buyer">၀ယ္ယူသူ</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input type="text" name="rawitem_id" value="{{ $purchase->buyer }}" class="form-control" disabled>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-2">
          <div class="form-group">
            <label for="price">ႏွဳန္း</label>
            <div class="input-group">
              <input type="text" id="price" name="price" value="{{ $purchase->price }}" class="form-control">
              <span class="input-group-addon">က်ပ္</span>
            </div>
          </div>
        </div>
        <div class="col-lg-1">
          <div class="form-group">
            <label for="quantity">ဦးေရ</label>
            <input type="text" id="quantity" name="quantity" value="{{ $purchase->quantity }}" class="form-control">
          </div>
        </div>
        <div class="col-lg-2">
          <div class="form-group">
            <label for="unit">ယူနစ္</label>
              <input type="text" name="unit" value="{{ $purchase->unit }}" class="form-control" disabled>
          </div>
        </div>
        <div class="col-lg-2">
          <div class="form-group">
            <label for="debt">ေၾကြးက်န္</label>
            <div class="input-group">
              <input type="text" name="debt" value="{{ $purchase->debt }}" class="form-control">
              <span class="input-group-addon">က်ပ္</span>
            </div>
          </div>
        </div>
        <div class="col-lg-2">
          <div class="form-group">
            <label for="total">သင့္ေငြ</label>
            <div class="input-group">
              <input type="text" name="total" id="total" value="{{ $purchase->total }}" class="form-control">
              <span class="input-group-addon">က်ပ္</span>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="form-group">
            <br>
            <button style="margin-top: 4px;" class="form-control btn btn-success " type="submit"><i class="glyphicon glyphicon-edit"></i> ျပင္ဆင္မည္</button>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection
