<?php
defined( 'MyEngine' ) or exit( 'Error: Access Denied!' );
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class indexController extends Controller{
    public function onDefault() {
        $list = Model::Index()->GetName();
        if ( empty($list ) ) {
            View::assign('title','創建網站名稱');
            View::display('info');
        } else{            
            View::assign('title', $list[0]['sys_name']);
            View::assign('theme',$list[0]['sys_theme']);
            View::assign('creator',$list[0]['sys_creator']);
            View::display('index');
        }
    }    
    public function onSysAdd() {
        $return = array(
            "code" => 1001,
            "message" => "提交成功"
        );
        try {
            $sys_name = $this->_getParam( 'sys_name' );
            $sys_theme = $this->_getParam( 'sys_theme' );
            $sys_creator = $this->_getParam( 'sys_creator' );
            $array_insert = array (
                'sys_name' => $sys_name,
                'sys_theme' => $sys_theme,
                'sys_creator' => $sys_creator,
                'sys_time' => time()
            );
            Model::Index()->Insert( $array_insert );
            echo json_encode( $return ); 
        } catch ( Exception $ex ){
            $return['code'] = 1002;
            $return['message'] = $ex->getMessage();
            echo json_encode($return);
        }
    }
}