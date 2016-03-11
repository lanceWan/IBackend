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
	 * @author		xezw211@gmail.com
	 * 
	 * @date		2016-03-08 09:05:58
	 * 
	 * @return		
	 */
    public function index(){
    	return view('admin.index.index');
    }

    /**
     * 局部 首页
     * 
     * @param		
     * 
     * @author		xezw211@gmail.com
     * 
     * @date		2016-03-08 16:48:16
     * 
     * @return		
     */
    public function ajaxIndex(){
    	return view('admin.index.ajaxindex');
    }

    public function dataTableI18n()
    {
        return trans('pagination.i18n');
    }


}
