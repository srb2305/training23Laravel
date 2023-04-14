@extends('layouts.web')

@section('content')
<h1>About</h1>

@if(!empty(Auth::user()))
	You are loged in!!!
@else
	Not login
@endif

<pre>
	<h2>Story About Us</h2>
Srb It Solution is a World-Class Software
Development and IT Consulting Company based in INDORE (MP),  delivering business solutions globally using full stack Microsoft and open-source technologies.

We provide a complete IT solution start from
Web & App development, Standard software & solutions.
We are expert in Web Development, 
Mobile App Development,
UI/UX Design & Front-End Development. 
We have more than 8 years of experience in software development field.
</pre>
@endsection


@section('script')
<script type="text/javascript"></script>
@endsection

