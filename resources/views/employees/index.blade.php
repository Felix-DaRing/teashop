@extends('layout.app')
@section('content')
<div class="panel panel-info">
  <div class="panel-heading">
    ၀န္ထမ္းစာရင္း
  </div>
  <div class="panel-body">
    <table class="table table-striped" id="dt">
      <thead>
        <tr>
          <td>အမည္</td>
          <td>အဖအမည္</td>
          <td>မွတ္ပံုတင္</td>
          <td>ရာထူး</td>
          <td>အေျခခံလစာ</td>
          <td></td>
          <td></td>
        </tr>
      </thead>
      <tbody>
        @foreach($employees as $emp)
        <tr>
          <td>{{ $emp->name }}</td>
          <td>{{ $emp->father }}</td>
          <td>{{ $emp->nrc }}</td>
          <td>{{ $emp->role }}</td>
          <td>{{ $emp->salary }} က်ပ္</td>
          <td align="right">
            <a href="employees/{{$emp->id}}/edit" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i></a>
            <a href="employees/{{$emp->id}}" class="btn btn-info"><i class="glyphicon glyphicon-play"></i></a>
          </td>
          <td align="left">
            <form method="post" action="/employees/{{$emp->id}}">
              {{ csrf_field() }}
              {{ method_field('DELETE') }}
              <button type="submit"  id="delete" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
