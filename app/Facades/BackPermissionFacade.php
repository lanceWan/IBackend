<?php
	namespace App\Facades;
	use Illuminate\Support\Facades\Facade;

	class BackPermissionFacade extends Facade{
		protected static function getFacadeAccessor(){
			return 'backpermissionfacade';
		}
	}