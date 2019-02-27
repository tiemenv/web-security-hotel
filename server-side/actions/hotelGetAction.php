<?php
use Rakit\Validation\Validator;

return function(){
		$file = config('hotel.json');
		
		return response(200, read_data($file));
};