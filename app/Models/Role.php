<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ActionAttributeTrait;
class Role extends Model
{
	use ActionAttributeTrait;
	
    protected $table = 'roles';

    protected $url;

    protected $action = 'role';

    public function __construct(){
    	$this->url = url('role');
    }
}
