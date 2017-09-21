@extends('layout.app')
@section('content')
  <div class="panel panel-info">
    <div class="panel-heading">
      ၾကိဳသံုးစာရင္း
    </div>
    <div class="panel-body">
      <table class="table table-hover" id="dt">
        <thead>
          <tr>
            <th>၀န္ထမ္းအမည္</th>
            <th>အမ်ိဳးအစား</th>
            <th>ပမာဏ</th>
            <th>ထုတ္ယူသည့္အခ်ိန္</th>
          </tr>
        </thead>
        <tbody>
          @foreach($loans as $loan)
            <tr>
              <td>{{ $loan->employee['name'] }}</td>
              <td>{{ $loan->type }}</td>
              <td>{{ $loan->amount }}</td>
              <td>{{ $loan->created_at }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
