<h1>Add Contact</h1>

@if(Session::get('success'))
	<p style="color:green"> {{Session::get('success')}} </p>
@endif

@if(Session::get('error'))
	<p style="color:red"> {{Session::get('error')}} </p>
@endif


<form action="{{ url('contact_store') }}" method="POST">
	@csrf
	Name : <input type="text" name="name"> <br>
	Email : <input type="email" name="email"> <br>
	Contact : <input type="number" name="contact"> <br>
	Message : <textarea name="message"></textarea> <br>
	<input type="submit" name="submit" value="Submit">
</form>