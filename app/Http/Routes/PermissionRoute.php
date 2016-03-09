<?php

	$router->group(['prefix' => 'permission'], function($router){
		$router->get('ajaxindex', 'PermissionController@ajaxIndex');
	});
	
	$router->resource('permission', 'PermissionController');