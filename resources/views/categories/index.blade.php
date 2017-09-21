@extends ('layout.app')

@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">
			အမ်ိဳးအစားမ်ား 
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
						<th></th>
						<th></th>
					</tr>
				</thead>
				<tbody>
				@foreach($categories as $category)
					<tr>
						<td>{{ $category->id }}</td>
						<td>{{ $category->code }}</td>
						<td>{{ $category->name }}</td>
						<td align="right">

							<a href="categories/{{$category->id}}/edit" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i></a><a href="categories/{{$category->id}}" class="btn btn-primary"><i class="glyphicon glyphicon-folder-open"></i></a>
						</td>
						<td>
							<form method="post" action="/categories/{{$category->id}}">
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
