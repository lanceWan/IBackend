<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller{
	/**
	 * 后台首页
	 * 
	 * @param		
	 * 
	 * @author		wen.zhou@bioon.com
	 * 
	 * @date		2016-03-07 14:21:54
	 * 
	 * @return		
	 */
    public function index(){
    	return view('layouts.admin');
    }
}
