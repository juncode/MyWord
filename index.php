<?php
/**
 * {$文件功能说明}
 *
 * @author chenyang <chenyang@antiy.com>
 * @since 2014-4-4 18:03:56
 * @version $Id: index.php 0 2014-4-4 18:03:56 chenyang $
 * @link http://antiy.com
 * @copyright Copyright (c) 2012, Antiy.Com All rights reserved
 */
//申明根目录
define( 'AppRoot',   dirname( __FILE__ )   );
//加载myengine框架
include '../MyEngine/MyEngine.php';

try {
    //session启动
    if ( !isset( $_SESSION ) ) {
        session_start();
    }
    new MyEngine();
} catch ( Exception $exc ) {
    echo $exc->getMessage();
}