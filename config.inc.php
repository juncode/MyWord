<?php
    /**
     * @page  配置文件
     * @description  配置数据库 
     * @param key
     * @return return
     * @author jun_huang <j@wonhsi.com>
     * @since 2014年6月26日13:44:23
     */
$GLOBALS['CONFIG']['ERROR'] = E_ALL;


$GLOBALS['CONFIG'] ['MYSQL'] = array( // 第二版数据库
    'SERVER' => 'localhost', //数据库服务器名
    'PORT' => 3306, // 链接端口
    'USER' => 'root', // 用户名
    'PASS' => 'root', // 密码
    'DATABASE' => 'myword', // 数据库名
    'CHARSET' => 'UTF8'
);

//服务端用此配置文件，本地端用上述配置文件
//
//$GLOBALS['CONFIG'] ['MYSQL'] = array( // 第二版数据库
//    'SERVER' => 'localhost', //数据库服务器名
//    'PORT' => 3306, // 链接端口
//    'USER' => 'uu164057', // 用户名
//    'PASS' => 'ftu8emyQ', // 密码
//    'DATABASE' => 'uu164057', // 数据库名
//    'CHARSET' => 'UTF8'
//);