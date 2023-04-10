<h1>Add User</h1>

@if(Session::get('success'))
	<p style="color:green"> {{Session::get('success')}} </p>
@endif

@if(Session::get('error'))
	<p style="color:red"> {{Session::get('error')}} </p>
@endif


<form action="{{ url('user_add') }}" method="POST">
	@csrf
	Name : <input type="text" name="name"> <br>
	Email : <input type="email" name="email"> <br>
	Contact : <input type="number" name="contact"> <br>
	Password : <input type="text" name="password"> <br>
	<input type="submit" name="submit" value="Submit">
</form>