<?php 
	namespace App\Repositories\Admin;
	use App\Models\Role;
	use App\Models\Permission;
	class BackRoleRepository{
		public function ajaxIndex()
		{
			$draw = request('draw', 1);/*获取请求次数*/
			$start = request('start', config('admin.main.list.start')); /*获取开始*/
			$length = request('length', config('admin.main.list.length')); ///*获取条数*/
			$search_pattern = request('search.regex', true); /*是否启用模糊搜索*/
			
			$name = request('name' ,'');
			$slug = request('slug' ,'');
			$description = request('description' ,'');
			$level = request('level' ,'');
			$status = request('status' ,'');
			$created_at_from = request('created_at_from' ,'');
			$created_at_to = request('created_at_to' ,'');
			$updated_at_from = request('updated_at_from' ,'');
			$updated_at_to = request('updated_at_to' ,'');
			$orders = request('order', []);

			$role = new Role;

			/*角色名称搜索*/
			if($name){
				if($search_pattern){
					$role = $role->where('name', 'like', $name);
				}else{
					$role = $role->where('name', $name);
				}
			}

			/*角色搜索*/
			if($slug){
				if($search_pattern){
					$role = $role->where('slug', 'like', $slug);
				}else{
					$role = $role->where('slug', $slug);
				}
			}
			/*描述搜索*/
			if($description){
				if($search_pattern){
					$role = $role->where('description', 'like', $description);
				}else{
					$role = $role->where('description', $description);
				}
			}

			/*角色等级搜索*/
			if($level){
				if($search_pattern){
					$role = $role->where('level', 'like', $level);
				}else{
					$role = $role->where('level', $level);
				}
			}
			/*状态搜索*/
			if ($status) {
				$role = $role->where('status', $status);
			}

			/*角色创建时间搜索*/
			if($created_at_from){
				$role = $role->where('created_at', '>=', getTime($created_at_from));	
			}
			if($created_at_to){
				$role = $role->where('created_at', '<=', getTime($created_at_to, false));	
			}

			/*角色修改时间搜索*/
			if($updated_at_from){
				$uafc = new Carbon($updated_at_from);
				$role = $role->where('created_at', '>=', getTime($updated_at_from));	
			}
			if($updated_at_to){
				$role = $role->where('created_at', '<=', getTime($updated_at_to, false));	
			}

			$count = $role->count();


			if($orders){
				$orderName = request('columns.' . request('order.0.column') . '.name');
				$orderDir = request('order.0.dir');
				$role = $role->orderBy($orderName, $orderDir);
			}

			$role = $role->offset($start)->limit($length);
			$roles = $role->get();

			if ($roles) {
				foreach ($roles as &$v) {
					$v['actionButton'] = $v->getActionButtonAttribute();
				}
			}


			return [
				'draw' => $draw,
				'recordsTotal' => $count,
				'recordsFiltered' => $count,
				'data' => $roles,
			];
		}

		public function create()
		{
			$permission = Permission::where('status',config('admin.status.active'))->get();
			$array = [];
			if ($permission) {
				foreach ($permission as $v) {
					array_set($array, $v->slug, ['slug' => $v->slug,'name' => $v->name,'desc' => $v->description]);
				}
			}
			return $permission;
		}
	}