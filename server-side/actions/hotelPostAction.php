<?php
// https://packagist.org/packages/rakit/validation

use Rakit\Validation\Validator;

return function(){
		
		// -- see lib.php for getRequest, config, read_data, save_data and response -- //

		$requestData = getRequest(); 

		// -- VALIDATION HERE!!! -- //
		// if not valid: return response('400', $errors->firstOfAll());

		
		// -- saving data in file --
		// -- file: storage/hotel.json
		$file = config('hotel.json');
		$data = read_data($file);
		$data[] = $requestData;

		if(save_data($data, $file)){
			return response('200', $data);	
		}//endif

		return response('404', 'unable to save data');

	
	};