<?php

	$router->group(['prefix' => 'role'], function($router){
		$router->get('ajaxindex', 'RoleController@ajaxIndex');
		$router->get('ngindex', 'RoleController@ngIndex');
	});
	
	$router->resource('role', 'RoleController');