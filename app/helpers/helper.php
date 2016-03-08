<?php
	/**
	 * 获取 列表 起始条数
	 * 
	 * @param		
	 * 
	 * @author		xezw211@gmail.com
	 * 
	 * @date		2016-03-08 14:44:47
	 * 
	 * @return		
	 */
	if(!function_exists('main_list_start')){
		function main_list_start(){
			return config('main.list.start', 0);
		}
	}

	/**
	 * 获取 列表 长度
	 * 
	 * @param		
	 * 
	 * @author		xezw211@gmail.com
	 * 
	 * @date		2016-03-08 14:44:47
	 * 
	 * @return		
	 */
	if(!function_exists('main_list_length')){
		function main_list_length(){
			return config('main.list.length', 20);
		}
	}