@extends('layouts.web')

@section('content')

<h1>Contact List</h1>

<table border="1">
	<thead>
		<th>S/no</th>
		<th>Name</th>
		<th>Email</th>
		<th>Contact</th>
		<th>View</th>
		<th>Edit</th>
		<th>Delete</th>
	</thead>
	<tbody>
		@php $i = 1; @endphp
		@foreach($data as $key=>$val)
		<tr>
			<td>{{$i++}}</td>
			<td>{{$val['name']}}</td>
			<td>{{$val['email']}}</td>
			<td>{{$val['contact']}}</td>
			<td><a href="{{url('contact/'.$val['id'])}}">View</a></td>
			<td><a href="{{url('contactEdit/'.$val['id'])}}">Edit</a></td>
			<td><a href="{{url('contactDelete/'.$val['id'])}}">Delete</a></td>
		</tr>
		@endforeach
	</tbody>
</table>

{{$data->links()}}


@endsection