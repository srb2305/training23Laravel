@extends('layouts.web')

@section('content')

<h1>Enquries List</h1>

<table border="1">
	<thead>
		<th>S/no</th>
		<th>Name</th>
		<th>Email</th>
		<th>Contact</th>
	</thead>
	<tbody>
		@php $i = 1; @endphp
		@foreach($data as $key=>$val)
		<tr>
			<td>{{$i++}}</td>
			<td>{{$val['name']}}</td>
			<td>{{$val['email']}}</td>
			<td>{{$val['contact']}}</td>
			
		</tr>
		@endforeach
	</tbody>
</table>

{{$data->links()}}


@endsection