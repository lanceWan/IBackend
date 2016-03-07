<?php
	namespace App\Facades;
	use Illuminate\Suppoer\Facades\Facade;

	class BackRoleFacade extends Facade{
		protected static function getAccessorFacade(){
			return 'backrolefacade';
		}
	}