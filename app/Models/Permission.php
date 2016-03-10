<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ActionAttributeTrait;

class Permission extends Model
{
	use ActionAttributeTrait;

    protected $table = 'permissions';

    protected $url;

    protected $action = 'permission';

    public function __construct(){
    	$this->url = url('permission');
    }
}
