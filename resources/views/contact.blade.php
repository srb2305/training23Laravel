

<a href="/">Home</a>
<a href="/about">About</a>
<a href="/contact">Contact</a>

<a href="{{ url('/contact') }}">Contact</a>




<h1>contact</h1>


@php  

echo "hello";

$name = 'ram';
@endphp


{{ $name }}

<?php echo $name;  ?>


<?php 
	for ($i=0; $i < 10; $i++) { 
		echo "<br>value=>".$i;
	}

?>


@for($i=0; $i < 10; $i++)
 <br>values ======>> {{ $i }}
@endfor

{{ url('/'); }}