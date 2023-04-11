<h1>Contact List</h1>

<table border="1">
	<thead>
		<th>Name</th>
		<th>Email</th>
		<th>Contact</th>
	</thead>
	<tbody>
		@foreach($data as $key=>$val)
		<tr>
			<td>{{$val['name']}}</td>
			<td>{{$val['email']}}</td>
			<td>{{$val['contact']}}</td>
		</tr>
		@endforeach
	</tbody>
</table>