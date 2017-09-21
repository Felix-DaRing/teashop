<!DOCTYPE html>
<html>
<head>

	<title>Tea shop POS</title>
	<link href="{{ URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{ URL::asset('css/styles.css')}}" rel="stylesheet">
	<link href="{{ URL::asset('css/sweetalert.css')}}" rel="stylesheet">
	<link href="{{ URL::asset('select2/css/select2.min.css')}}" rel="stylesheet">
	<link href="{{ URL::asset('jquery-ui/jquery-ui.min.css')}}" rel="stylesheet">
	<link href="{{ URL::asset('css/jquery.datetimepicker.min.css')}}" rel="stylesheet">
	<link href="{{ URL::asset('gridly/css/jquery.gridly.css')}}" rel="stylesheet">
 	<!-- <link href="{{ URL::asset('css/datepicker.css')}}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('jquery-ui/jquery-ui.structure.min.css')}}"> -->
	<link rel="stylesheet" type="text/css" href="{{URL::asset('jquery-ui/jquery-ui.theme.min.css')}}">
	<link rel="shortcut icon" type="image/png" href="{{URL::asset('images/ez.png')}}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/datatables.min.css') }}">
</head>

<body>


	@include('inc.navbar')

	<div class="container-fluid" id="frame">

		<div class="row-fluid">
			@if(Request::segment(1) != 'sales')
			<div class="col-lg-2">
				@include ('inc.sidebar')
			</div>
			@endif
			<div class="col-lg-10">
				@include('inc.helper')
				@include('inc.message')
				@include('inc.error')
				@yield('content')
			</div>
		</div>
	</div>
	<script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/datatables.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/custom.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/bootbox.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/sweetalert.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('select2/js/select2.full.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('jquery-ui/jquery-ui.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/list.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/jquery.datetimepicker.full.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('gridly/js/jquery.gridly.js') }}"></script>
		 @include('sweet::alert')
	<script>

	</script>
</body>
</html>
