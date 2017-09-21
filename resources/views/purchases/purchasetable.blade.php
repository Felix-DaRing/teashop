<div>
	<table id="dt" class="table table-responsive table-bordered">
		<thead>
			<tr>
				<th>ID</th>
				<th>ေန႔ရက္</th>
				<th>အခ်ိန္</th>
				<th>ပစၥည္း</th>
				<th>အမ်ိဳးအစား</th>
				<th>ေရာင္းခ်သူ</th>
				<th>၀ယ္ယူသူ</th>
				<th>ႏွဳန္း</th>
				<th>ဦးေရ</th>
				<th>ေၾကြးက်န္</th>
				<th>သင့္ေငြ</th>
			</tr>
		</thead>
		<tbody>
		@foreach($purchases as $purchase)
			<tr>
				<td>{{ $purchase->id }}</td>
				<td>{{ $purchase->created_at->format('d-m-Y')}}</td>
				<td>{{ $purchase->created_at->format('H:i')}}</td>
				<td>{{ $purchase->rawitem['name'] }} [{{ $purchase->rawitem['code'] }}]</td>
				<td>{{ $purchase->category['name'] }}</td>
				<td>{{ $purchase->supplier['name'] }}</td>
				<td>{{ $purchase->buyer }}</td>
				<td>{{ $purchase->price }}</td>
				<td>{{ $purchase->quantity }} {{ $purchase->unit }}</td>
				<td>{{ $purchase->debt }}</td>
				<td>{{ $purchase->total }}</td>
			</tr>
		@endforeach
		</tbody>
	</table>
</div>
