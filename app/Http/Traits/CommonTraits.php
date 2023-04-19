<?php
namespace App\Http\Traits; 
use DB;

trait CommonTraits{

	private function getContact($id){
		return DB::table('contacts')->find($id);
	} 
}


?>