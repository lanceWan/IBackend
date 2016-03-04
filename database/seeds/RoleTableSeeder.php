<?php

use Illuminate\Database\Seeder;
use Bican\Roles\Models\Role;
use Bican\Roles\Models\Permission;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = Role::create([
            'name' => 'Admin',
            'slug' => 'admin',
            'description' => '超级管理员',
            'level' => 1,
        ]);

        $userRole = Role::create([
            'name' => 'User',
            'slug' => 'user',
            'description' => '普通用户',
        ]);

        /**
         * 管理员初始化权限
         */
        
        $adminRole->detachAllPermissions();

        /**
         * 普通用户赋予一般权限
         */
        $loginBackendPer = Permission::where('slug', '=', 'login.backend')->first();
        
        $userRole->attachPermission($loginBackendPer);
    }
}
