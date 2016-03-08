<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * 微信 access_token
 * 
 * @param        
 * 
 * @author        wen.zhou@bioon.com
 * 
 * @date        2016-03-08 08:55:15
 * 
 * @return        
 */
class CreateWechatTokensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('wechat_tokens', function (Blueprint $table) {
            $table->increments('id');

            $table->string('app_id')->comment('微信appid');
            $table->string('access_token')->comment('微信的access_token');
            $table->integer('expire')->comment('过期时间');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::drop('wechat_tokens');
    }
}
