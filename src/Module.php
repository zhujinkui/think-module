<?php
// 类库名称：auth权限
// +----------------------------------------------------------------------
// | PHP version 5.6+
// +----------------------------------------------------------------------
// | Copyright (c) 2012-2014 http://www.myzy.com.cn, All rights reserved.
// +----------------------------------------------------------------------
// | Author: 阶级娃儿 <262877348@qq.com> 群：304104682
// +----------------------------------------------------------------------

namespace think;

use think\facade\Db;
use think\facade\Config;
use think\facade\Session;
use think\facade\Request;

class Module
{
    /**
     * @var array 配置信息
     */
    protected $config = [
        // 权限开关
        'auth_on'           => true,
        // 认证方式：1为实时认证；每次验证，都重新读取数据库内的权限数据，如果对权限验证非常敏感的，建议使用实时验证;2为登录认证 (即登录成功后，就把该用户用户的权限规则获取并保存到 session，之后就根据 session 值做权限验证判断)
        'auth_type'         => 1,
        // 角色用户组数据表名
        'auth_group'        => 'auth_group',
        // 用户-角色用户组关系表
        'auth_group_access' => 'auth_group_access',
        // 权限规则表
        'auth_rule'         => 'auth_rule',
        // 用户信息表
        'auth_user'         => 'member',
    ];
}