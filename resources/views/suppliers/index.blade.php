@extends('layout.app')
@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">
			ပစၥည္းေရာင္းခ်သူမ်ား 
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
						<th>အမည္</th>
						<th>လုပ္ငန္း</th>
						<th>ဖုန္းနံပါတ္</th>
						<th>လိပ္စာ</th>
						<th>စတင္သည့္အခ်ိန္</th>
						<th></th>
						<th></th>
					</tr>
				</thead>
				<tbody>
				@foreach($suppliers as $supplier)
					<tr>
						<td>{{ $supplier->id }}</td>
						<td>{{ $supplier->code }}</td>
						<td>{{ $supplier->name }}</td>
						<td>{{ $supplier->type }}</td>
						<td>{{ $supplier->phone }}</td>
						<td>{{ $supplier->address }}</td>
						<td>{{ $supplier->created_at->diffForHumans() }}</td>
						<td align="right">

							<a href="suppliers/{{$supplier->id}}/edit" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i></a><a href="suppliers/{{$supplier->id}}" class="btn btn-primary"><i class="glyphicon glyphicon-folder-open"></i></a>
						</td>
						<td>
							<form method="post" action="/suppliers/{{$supplier->id}}">
								{{ csrf_field() }}
								{{ method_field('DELETE') }}
								<button type="submit" id="delete" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
							</form>
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection