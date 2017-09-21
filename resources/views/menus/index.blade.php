@extends('layout.app')
@section('content')
<div class="panel panel-default">
		<div class="panel-heading">
			စားေသာက္ဖြယ္ရာမ်ား
			<div class="label label-default">
				{{ $count }}  ခု
			</div>
		</div>
		<div class="panel-body">
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
							<td><img class="thumbnail" src="storage/images/{{ $menu->image }}" height="100px" width="100px" alt="{{ $menu->name }}" /></td>
							<td><a style="border-bottom: 4px dotted #b33c00; text-decoration: none; color: black;" href="categories/{{ $menu->category['id'] }}">{{ $menu->category['name'] }}</a></td>
							<td>{{ $menu->price }} က်ပ္</td>
							<td>
								@if ($menu->active == 1)
									<div class="label label-success">Active</div>
								@else
									<div class="label label-danger">Inactive</div>
								@endif
							</td>
							<td align="right">
								<a href="menus/{{$menu->id}}/edit" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i></a>
								<a href="menus/{{$menu->id}}" class="btn btn-info"><i class="glyphicon glyphicon-list"></i></a>
							</td>
							<td align="left">
								<form method="post" action="/menus/{{$menu->id}}">
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
