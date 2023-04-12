<h1>Edit Details </h1>

<form action="{{url('contactUpdate')}}" method="POST">
	@csrf
<input type="hidden" name="id" value="{{$data['id']}}">	
Name: <input type="text" name="name" value="{{$data['name']}}"> <br>
Email: <input type="text" name="email" value="{{$data['email']}}"><br>
Contact: <input type="text" name="contact" value="{{$data['contact']}}"><br>
Message: <input type="text" name="message" value="{{$data['message']}}"> <br>

<input type="submit" name="submit" value="Update">

</form>

<a href="{{url('contact')}}"> <-- Back</a>