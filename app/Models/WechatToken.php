<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WechatToken extends Model
{
    protected $fillable = ['app_id', 'access_token', 'expire'];
}
