<?php
/**
	 response($status = 200, $data = null)
**/
if( ! function_exists('response')){
	function response($status = 200, $data = null){

		header('Content-Type: application/json');
		
		if($status == 404){
			header("HTTP/1.0 404 Not Found");
			exit;
		}//endif

		if($status == 200){
			if($data)
				return json_encode($data);
			return json_encode('');
		}//endif
		
	}//endfunction
}//endif


/**
	getRequest() : returns all get and posts by $_REQUEST
	getRequest('name') : returns get or post by key
	getRequest('name', 'Jan') :  returns get or post by key, if not found retursn Jan
**/
if( ! function_exists('getRequest')){
	function getRequest($key = null, $default = null){
	
		if(is_null($key)){
			return $_REQUEST;
		}//endif


		if( ! isset($_REQUEST[$key])){
			return $default;
		}//endif


		return $_REQUEST[$key];
	}//endfunction
}//endif


/**
	very basic render function
**/
if( ! function_exists('render')){
	function render($content) {
		// ob_start()
		if(is_callable($content))
			$content = $content();
		

		print $content;
		$content = ob_get_contents();
		ob_end_clean();

		print $content;
	}
}

/**
	saves json data to file
**/
if( ! function_exists('save_data')){
	function save_data($data, $filename) {
	
		$data = json_encode($data);
		return file_put_contents($filename, $data);
	}
}


/**
	reads json data from file
**/
if( ! function_exists('read_data')){
	function read_data($filename) {

		if( ! file_exists($filename)){
			return [];
		}//endif

		$data = file_get_contents($filename);
		if($data === false){
			$data == '[]';
		}//endif

		$data = json_decode($data);
		
		return $data;
	}
}

/**
	read config
**/
if( ! function_exists('config')){

	function config($key, $default = null){
		$config = require('config.php');

		return isset($config[$key]) ? $config[$key] : $default;	
	}	
}//endif