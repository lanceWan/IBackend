<?php
	namespace App\Facades;
	use Illuminate\Support\Facades\Facade;

	class BackRoleFacade extends Facade{
		protected static function getFacadeAccessor(){
			return 'backrolefacade';
		}
	}