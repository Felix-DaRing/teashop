@extends('layout.app')
@section('content')
<div class="jumpbotron">
	<div style="background-image: url(../storage/images/{{$images->image}}); background-size: cover; height: 200px;">

	</div>
	<h1>{{ $category->name }}&nbsp;<div class="badge">{{ $count }} ခု</div>&nbsp;
		<a href="/menus/create" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Menu အသစ္</a>
		<a href="/categories/{{ $category->id }}/date" class="btn btn-info"><i class="glyphicon glyphicon-shopping-cart"></i> အ၀ယ္</a>
	</h1> <hr>

</div>

	<table class="table table-hover" id="dt">
		<thead>
			<tr>
				<th>ID</th>
				<th>ကုဒ္နံပါတ္</th>
				<th>အမ်ိဳးအမည္</th>
				<th>ရုပ္ပံု</th>
				<th>အမ်ိဳးအစား</th>
				<th>ေဈးႏွဳန္း</th>
				<th>ရရွိႏိုင္မွဳ</th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		<tbody>
				@foreach($menus as $menu)
					<tr>
						<td>{{ $menu->id }}</td>
						<td>{{ $menu->code }}</td>
						<td>{{ $menu->name }}</td>
						<td><img class="thumbnail" src="{{ url("storage/images/".$menu->image) }}" height="100px" width="100px" alt="{{ $menu->name }}" /></td>
						<td>{{ $menu->category->name }}</td>
						<td>{{ $menu->price }} က်ပ္</td>
						<td>
							@if ($menu->active == 1)
								<div class="label label-success">Active</div>
							@else
								<div class="label label-danger">Inactive</div>
							@endif
						</td>

						<td align="right">

						<a href="{{url("menus/".$menu->id."/edit")}}" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i></a>
							<a href="{{url("menus/".$menu->id)}}" class="btn btn-info"><i class="glyphicon glyphicon-list"></i></a>
						</td>
						<td align="left">
							<form method="post" action="{{url("menus/".$menu->id)}}">
								{{ csrf_field() }}
								{{ method_field('DELETE') }}
								<button type="submit" id="delete" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
							</form>
						</td>
					</tr>
				@endforeach
			</tbody>
	</table>
@endsection
