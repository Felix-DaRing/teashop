<div>
	<table id="dt" class="table table-responsive table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>ေန႔ရက္</th>
				<th>အခ်ိန္</th>
				<th>ပစၥည္းအမည္</th>
				<th>အမ်ိဳးအစား</th>
				<th>ေရာင္းခ်သူ</th>
				<th>၀ယ္ယူသူ</th>
				<th>ႏွဳန္း</th>
				<th>ဦးေရ</th>
				<th>ေၾကြးက်န္</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
		@foreach($debts as $debt)
			<tr>
				<td>{{ $debt->id }}</td>
				<td>{{ $debt->created_at->format('d-m-Y') }}</td>
				<td>{{ $debt->created_at->format('H:i') }}</td>
				<td>{{ $debt->rawitem['name'] }} [{{ $debt->rawitem['code'] }}]</td>
				<td>{{ $debt->category['name'] }}</td>
				<td>{{ $debt->supplier['name'] }}</td>
				<td>{{ $debt->buyer }}</td>
				<td>{{ $debt->price }}</td>
				<td>{{ $debt->quantity }} {{ $debt->unit }}</td>
				<td>{{ $debt->debt }}</td>
				<td>
					<form action="debt/{{ $debt->id }}/debtclear" method="post">
						{{ csrf_field() }}
						{{ method_field('PUT') }}
						<button class="btn btn-danger" type="submit" name="debtclear"><i class="glyphicon glyphicon-trash"></i></button>
					</form>
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>
</div>
