<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

/*仓库*/
use BackMenuRepository;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.menu.index');
    }

    public function ngIndex(){
        return view('admin.menu.ngindex');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * 修改 菜单 模块以及排序
     * 
     * @param        
     * 
     * @author        xezw211@gmail.com
     * 
     * @date        2016-03-15 19:10:37
     * 
     * @return        
     */
    public function ngUpdate(){
        $returnData = [
            'result' => false
        ];
        $menu = request('menu', '');
        // dd($menu);
        if(!empty($menu)){
            $menuArrs = json_decode($menu, true);

            // dd($menuArrs);
            if($menuArrs){
                foreach($menuArrs as $menuArr){
                    $order = 1;

                    $data = [
                        'sort' => $order,
                    ];
                    $order += 1;
                    BackMenuRepository::adminUpdateMenu($pid, $data);

                    while(isset($menuArr['children'])){
                        $childrenorder = 1;

                        $pid = $menuArr['id'];
                        foreach($menuArr['children'] as $menuChildArr){
                            $data = [
                                'sort' => $childrenorder,
                                'parent_id' => $pid
                            ];
                            $childrenorder += 1;
                            BackMenuRepository::adminUpdateMenu($pid, $data);
                        }
                        $menuArr = $menuArr['children'];
                    }
                }

                $returnData = [
                    'result' => true
                ];
            }else{
                /*不进行任何修改*/
                $returnData = [
                    'result' => true
                ];
            }
        }

        return response()->json($returnData);
    }
    
}
