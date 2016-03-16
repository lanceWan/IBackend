<?php
	/**
	 * 显示菜单路由
	 * 
	 * @param		
	 * 
	 * @author		xezw211@gmail.com
	 * 
	 * @date		2016-03-15 11:29:45
	 * 
	 * @return		
	 */
	$router->group(['prefix' => 'menu'], function($router){
		$router->get('ngindex', 'MenuController@ngIndex');
		$router->post('ngupdate', 'MenuController@ngUpdate');
	});
	
	$router->resource('menu', 'MenuController');