@extends('layout.app')
@section('content')

@if(isset($purchases))
<h4>{{ $startdate }} မွ {{ $enddate }} ထိ </h4>
<small align="right" style="padding-left: 5px; border-left: 4px solid #80bfff; background: #d1e0e0;">အေရအတြက္ - {{ $q }} ခု | အၾကိမ္ေရ - {{ $c }} ၾကိမ္ |<b style="color: #cc33ff;"> သင့္ေငြ - {{ $a }} က်ပ္ </b></small><hr>
@include('purchases.purchasetable')
@endif

@if(isset($debts))
@include('purchases.debttable')
@endif

@endsection
