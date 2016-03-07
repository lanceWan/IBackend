<?php
	namespace App\Facades;
	use Illuminate\Suppoer\Facades\Facade;

	class BackUserFacade extends Facade{
		protected static function getAccessorFacade(){
			return 'backuserfacade';
		}
	}