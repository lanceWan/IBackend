<?php
	namespace App\Facades;
	use Illuminate\Suppoer\Facades\Facade;

	class BackMenuFacade extends Facade{
		protected static function getAccessorFacade(){
			return 'backmenufacade';
		}
	}