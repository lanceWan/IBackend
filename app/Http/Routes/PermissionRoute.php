<?php

	$router->group(['prefix' => 'permission'], function($router){
		$router->get('ajaxindex', 'PermissionController@ajaxIndex');
		$router->get('ngindex', 'PermissionController@ngIndex');
	});
	
	$router->resource('permission', 'PermissionController');