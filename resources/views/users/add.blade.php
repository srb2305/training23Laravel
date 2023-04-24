<style type="text/css">
	.error{
		color: red;
	}
</style>
<h1>Add User</h1>

@if(Session::get('success'))
	<p style="color:green"> {{Session::get('success')}} </p>
@endif

@if(Session::get('error'))
	<p style="color:red"> {{Session::get('error')}} </p>
@endif

@if($errors->any())
 <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="error">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ url('user_add') }}" method="POST" enctype="multipart/form-data">
	@csrf
	Name : <input type="text" name="name" value="{{old('name')}}"> 
	@error('name')
        <span class="error" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror<br>
	Email : <input type="email" name="email" value="{{old('email')}}">
	@error('email')
        <span class="error" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror <br>
	Contact : <input type="number" name="contact" value="{{old('contact')}}"> <br>
	Profile: <input type="file" name="image" ><br>
	Password : <input type="text" name="password" > <br>
	Confirm Password : <input type="text" name="password_confirmation" > <br>
	<input type="submit" name="submit" value="Submit">
</form>