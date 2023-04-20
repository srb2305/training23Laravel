<?php

use Illuminate\Support\Facades\DB;

if (! function_exists('getProjectTitle')) {
	function getProjectTitle(){
		return "Training PHP 1234";
	}
}


if (! function_exists('getContact')) {
	 function getContact($id){
		return DB::table('contacts')->find($id);
	} 
}

?>