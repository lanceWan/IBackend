<?php 
	namespace App\Repositories\Admin;

	use App\User;

	use Carbon\Carbon;

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
			$start = request('start', config('admin.main.list.start')); /*获取开始*/
			$length = request('length', config('admin.main.list.length')); ///*获取条数*/
			$search = request('search.value', ''); /*搜索*/
			$search_pattern = request('search.regex', true); /*是否启用模糊搜索*/

			$name = request('name' ,'');
			$email = request('email' ,'');
			$status = request('status' ,'');
			$created_at_from = request('created_at_from' ,'');
			$created_at_to = request('created_at_to' ,'');
			$updated_at_from = request('updated_at_from' ,'');
			$updated_at_to = request('updated_at_to' ,'');

			$orders = request('order', []);

			$user = new User;

			/*用户名搜索*/
			if($name){
				if($search_pattern){
					$user = $user->where('name', 'like', $name);
				}else{
					$user = $user->where('name', $name);
				}
			}

			/*邮箱搜索*/
			if($email){
				if($search_pattern){
					$user = $user->where('email', 'like', $email);
				}else{
					$user = $user->where('email', $email);
				}
			}

			/*用户装填*/
			if($status){
				$user = $user->where('status', $status);
			}

			/*用户账号创建时间搜索*/
			if($created_at_from){
				$user = $user->where('created_at', '>=', getTime($created_at_from));	
			}
			if($created_at_to){
				$user = $user->where('created_at', '<=', getTime($created_at_to, false));	
			}

			/*用户账号修改时间搜索*/
			if($updated_at_from){
				$uafc = new Carbon($updated_at_from);
				$user = $user->where('created_at', '>=', getTime($updated_at_from));	
			}
			if($updated_at_to){
				$user = $user->where('created_at', '<=', getTime($updated_at_to, false));	
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
				'button' => 'asfaslf',
				'data' => $users,
			];
		}
	}