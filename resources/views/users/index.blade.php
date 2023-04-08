<h1>User List</h1>
@php
	$myAry =[ 
				[
					'name'=>'Ram',
					'email' => 'Ram@gmail.com',
					'contact' => '7878787878'
				],
				[
					'name'=>'Mohan',
					'email' => 'Ram@gmail.com',
					'contact' => '555555555'
				],
				[
					'name'=>'Shyam',
					'email' => 'Shyam@gmail.com',
					'contact' => '88888888'
				]
			];
@endphp

<table border="1">
	<thead>
		<th>Name</th>
		<th>Email</th>
		<th>Contact</th>
	</thead>
	<tbody>
		@foreach($myAry as $key=>$val)
		<tr>
			<td>{{$val['name']}}</td>
			<td>{{$val['email']}}</td>
			<td>{{$val['contact']}}</td>
		</tr>
		@endforeach
	</tbody>
</table>
