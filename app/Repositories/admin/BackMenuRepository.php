<?php
	namespace App\Repositories\Admin;
	use App\Models\Menu;
	class BackMenuRepository{

		/**
		 * 修改 后台菜单
		 * 
		 * @param		
		 * 
		 * @author		xezw211@gmail.com
		 * 
		 * @date		2016-03-16 09:01:50
		 * 
		 * @return		
		 */
		public function adminUpdateMenu($id, $data){
			$menu = Menu::find($id);
			$menu->fill($data);
			return $menu->save();
		}
	}