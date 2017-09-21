@extends('layout.app')
@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">
			ကုန္ၾကမ္းပစၥည္းမ်ား် 
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
						<th>ပစၥည္းအမည္</th>
						<th></th>
						<th></th>
					</tr>
				</thead>
				<tbody>
				@foreach($rawitems as $rawitem)
					<tr>
						<td>{{ $rawitem->id }}</td>
						<td>{{ $rawitem->code }}</td>
						<td>{{ $rawitem->name }}</td>
						<td align="right">

							<a href="rawitems/{{$rawitem->id}}/edit" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i></a>
							<a href="rawitems/{{$rawitem->id}}" class="btn btn-primary"><i class="glyphicon glyphicon-folder-open"></i></a>
						</td>
						<td>
							<form method="post" action="/rawitems/{{$rawitem->id}}">
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