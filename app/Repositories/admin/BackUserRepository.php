<?php 
	namespace App\Repositories\Admin;

	use App\User;

	class BackUserRepository{
		
		/**
		 * 获取 ajax 用户列表
		 * 
		 * @param		
		 * 
		 * @author		xezw211@gmail.com
		 * 
		 * @date		2016-03-08 13:47:00
		 * 
		 * @return		
		 */
		public function ajaxIndex(){
			$data = request()->all();

			$draw = request('draw', 1);/*获取请求次数*/
			$start = request('start', main_list_start()); /*获取开始*/
			$length = request('length', main_list_length()); ///*获取条数*/
			$search = request('search.value', ''); /*搜索*/
			$search_pattern = request('search.regex', true); /*是否启用模糊搜索*/

			$orders = request('order', []);

			$user = new User;

			if($search){
				if($search_pattern){
					$user = $user->where('name', 'like', $search);
				}else{
					$user = $user->where('name', $search);
				}
			}

			$user = $user->offset($start)->limit($length);

			if($orders){
				$orderName = request('columns.' . request('order.0.column') . '.name');
				$orderDir = request('order.0.dir');
				$user = $user->orderBy($orderName, $orderDir);
			}

			$users = $user->get();
			$count = $user->count();

			return [
				'draw' => $draw,
				'recordsTotal' => $count,
				'recordsFiltered' => $count,
				'data' => $users,
			];
		}
	}