@extends('layout.app')
@section('content')
<!-- Left Pane -->
  <div class="col-lg-6">
    <div class="jumbotron">
  	  <h1>{{ $employee->name }}</h1>

  	   <table class="table table-condensed">
         <tr>
           <td>အဖအမည္</td>
           <td>{{ $employee->father }}</td>
         </tr>
         <tr>
           <td>ေမြးသကၠရာဇ္</td>
           <td>{{ $employee->dob }}</td>
         </tr>
         <tr>
           <td>မွတ္ပံုတင္အမွတ္</td>
           <td>{{ $employee->nrc }}</td>
         </tr>
         <tr>
           <td>လိပ္စာ</td>
           <td>{{ $employee->ward }} ၊ {{ $employee->city }} ၊ {{ $employee->state }}</td>
         </tr>
         <tr>
           <td>ဖုန္း</td>
           <td>{{ $employee->phone }}</td>
         </tr>
         <tr>
           <td>ရာထူး</td>
           <td>{{ $employee->role }}</td>
         </tr>
         <tr>
           <td>လစာ</td>
           <td>{{ $employee->salary }} က်ပ္</td>
         </tr>
         <tr>
           <td>အလုပ္စဆင္းရက္</td>
           <td>{{ Carbon\Carbon::parse($employee->joindate)->format('d-M-Y') }}</td>
         </tr>
  	   </table>
       <a href="/employees/{{$employee->id}}/edit" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>

  	</div>
  </div>
<!-- Right Pane -->
  <div class="col-lg-6">
    <div class="jumbotron">
  	  <h3>ယခုလ ၾကိဳသံုးေငြ</h3>
      <table class="table table-bordered">
        <thead>
          <tr>
            <td>ထုတ္ယူသည့္အခ်ိန္</td>
            <td>အမ်ိဳးအစား</td>
            <td>ပမာဏ</td>
          </tr>
        </thead>
        <tbody>
          @foreach($loans as $loan)
          <tr>
            <td><a href="#" data-toggle="tooltip" title="{{ $loan->created_at }}">{{ Carbon\Carbon::parse($loan->created_at)->format('d-M-Y') }}</a></td>
            <td>{{ $loan->type }}</td>
            <td>{{ $loan->amount }} က်ပ္</td>
          </tr>
          @endforeach
          <tr>
            <td colspan="2" align="right">စုစုေပါင္း ထုတ္ယူေငြ</td>
            <td>{{ $a }} က်ပ္</td>
          </tr>
          <tr>
            <td colspan="2" align="right">က်န္ရွိေသာ လစာေငြ</td>
            <td>{{ $rest }} က်ပ္</td>
          </tr>
        </tbody>
      </table>
  	</div>
  </div>
@endsection
