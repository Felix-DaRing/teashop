@extends('layout.app')
@section('content')
<h4>{{ $startdate }} မွ {{ $enddate }} ထိ </h4>
<h5>{{ $cat->name }} - အ၀ယ္စာရင္း </h5>
<small align="right" style="padding-left: 5px; border-left: 4px solid #80bfff; background: #d1e0e0;">အေရအတြက္ - {{ $q }} ခု | အၾကိမ္ေရ - {{ $c }} ၾကိမ္ |<b style="color: #cc33ff;"> သင့္ေငြ - {{ $a }} က်ပ္ </b></small><hr>
  @include('purchases.PurchaseTable')
@endsection
