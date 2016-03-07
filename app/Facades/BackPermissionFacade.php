<?php
	namespace App\Facades;
	use Illuminate\Suppoer\Facades\Facade;

	class BackPermissionFacade extends Facade{
		protected static function getAccessorFacade(){
			return 'backpermissionfacade';
		}
	}