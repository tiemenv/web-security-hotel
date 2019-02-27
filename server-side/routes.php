<?php

// -- method:/url => action || function
$routes = [
	'get:/api/hotel' => require('actions/hotelGetAction.php'),
	'post:/api/hotel' => require('actions/hotelPostAction.php'),
	'get:/api/test' => function(){
		return response('200', ['GET test ok', $_REQUEST]);
	},
	'post:/api/test' => function(){
		return response('200', ['POST test ok', $_REQUEST]);
	},
];





