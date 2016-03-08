<?php
	namespace App\Facades;
	use Illuminate\Support\Facades\Facade;

	class BackUserFacade extends Facade{
		protected static function getFacadeAccessor(){
			return 'backuserfacade';
		}
	}