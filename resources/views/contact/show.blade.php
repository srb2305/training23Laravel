<h1>Show Details </h1>
Name: {{$data->name}} <br>
Email: {{$data->email}} <br>
Contact: {{$data->contact}} <br>
Message: {{$data->message}} <br>

<a href="{{url('contact')}}"> <-- Back</a>

<h2>Project Name => {{getProjectTitle()}}  </h2>
<h2>  </h2>

@php
$newData = getContact(1);

@endphp

<h1>Show Details </h1>
Name: {{$newData->name}} <br>
Email: {{$newData->email}} <br>
Contact: {{$newData->contact}} <br>
Message: {{$newData->message}} <br>
