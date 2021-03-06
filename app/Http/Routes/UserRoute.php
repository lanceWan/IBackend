<?php
	/**
	 * 显示用户路由
	 * 
	 * @param		
	 * 
	 * @author		xezw211@gmail.com
	 * 
	 * @date		2016-03-08 09:05:39
	 * 
	 * @return		
	 */
	$router->group(['prefix' => 'user'], function($router){
		$router->get('ajaxindex', 'UserController@ajaxIndex');	
		$router->get('ngindex', 'UserController@ngIndex');
		$router->get('ngcreate', 'UserController@ngCreate');
	});
	
	$router->resource('user', 'UserController');