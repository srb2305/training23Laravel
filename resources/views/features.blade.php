<h1>Features</h1>

@php
	$name = 'ram';
	$lastName = 'mohan';
@endphp

Your name is : {{ucFirst($name)}} {{$lastName}}

<h2>For Loop</h2>
@for($i=4;$i>=0;$i--)
	<p>{{$i}}</p>
@endfor

<h2>ForEach Loop</h2>
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


<h2>If </h2>
@php
	$email ='admin@gmail.com';
@endphp

@if($email == 'admin@gmail.com')
	You are admin.....
@endif


<h2>If else</h2>

@if($email == 'user@gmail.com')
	You are admin.....
@else
	You are not admin.....
@endif





