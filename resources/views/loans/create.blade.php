@extends('layout.app')
@section('content')
<div class="col-lg-6">
  <div class="panel panel-danger">
    <div class="panel-heading">
      လစာႏွဳတ္ျခင္း
    </div>
    <div class="panel-body">
      <div class="row">

          <form action="{{ url("/loans") }}" method="post" style="padding: 5px;">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="employee_id">၀န္ထမ္းအမည္</label>
              <select class="form-control select2" name="employee_id">
                <option value="0">--Choose--</option>
                @foreach($employees as $emp)
                <option value="{{ $emp->id }}">{{ $emp->name }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="type">အမ်ိဳးအစား</label>
              <select class="select2 form-control" name="type">
                <option value="0">--Choose--</option>
                <option value="ၾကိဳသံုးေငြ">ၾကိဳသံုးေငြ</option>
                <option value="ဒဏ္ေငြ">ဒဏ္ေငြ</option>
                <option value="ကြဲ/ေပ်ာက္">ကြဲ/ေပ်ာက္</option>
              </select>
            </div>
            <div class="form-group">
              <label for="amount">ပမာဏ</label>
              <input type="text" name="amount" placeholder="Enter Amount" class="form-control">
            </div>
            <button type="submit"  class="btn btn-success" name="create">Add</button>
            <a href="{{ url('/employees') }}" class="btn btn-danger"><i class="glyphicon glyphicon-back"></i>Back</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
