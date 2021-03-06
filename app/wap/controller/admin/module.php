<?php

 

/*
 * @package site
 * @copyright Copyright (c) 2010, ecclub. inc
 * @author edwin.lzh@gmail.com
 * @license 
 */
class wap_ctl_admin_module extends desktop_controller 
{
    /*
     * workground
     * @var string
     */
    var $workground = 'wap.workground.theme';

    function __construct($app)
    {
        parent::__construct($app);
        $this->_request = kernel::single('base_component_request');
        $this->_response = kernel::single('base_component_response');
    }//End Function

    /*
     * 列表
     * @public
     */
    public function index() 
    {
        // $lab = app::get('desktop')->getConf('use_ssl') ? app::get('desktop')->_('后台禁用强制SSL') : app::get('desktop')->_('后台启用强制SSL');
        $this->finder('wap_mdl_modules', array(
           'title' => app::get('wap')->_('系统模块'),
           'base_filter' => array(),
           'actions'=>array(
               // array('label'=>app::get('desktop')->_('启用SSL'),'submit'=>'index.php?app=wap&ctl=admin_module&act=ssl_on'),
               // array('label'=>app::get('desktop')->_('禁用SSL'),'submit'=>'index.php?app=wap&ctl=admin_module&act=ssl_off'),
               // array('label'=>$lab,'href'=>'index.php?app=wap&ctl=admin_module&act=desktop_ssl'),
               ),
            /*
           'actions'=>array(
                array(
                    'label' => app::get('wap')->_('添加自定义模块'), 
                    'href' => 'index.php?app=wap&ctl=admin_module&act=add', 
                    'target' => 'dialog::{frameable:true, title:\'添加自定义模块\', width:400, height:375}',
                ),
            ),
            */
        ));

    }//End Function

    public function ssl_on() {
        $this->begin();
        if(!$this->ping() ) {
            $this->end(false, app::get('wap')->_('您的服务器不支持SSL'));
        }
        $modules = $this->_request->get_post('id');
        if(app::get('wap')->model('modules')->update(array('use_ssl'=>'true'), array('id'=>$modules))) {
            $this->end(true, app::get('wap')->_('更新成功'));
        } else {
            $this->end(false, app::get('wap')->_('更新失败'));
        }

    }

    public function ssl_off() {
        $this->begin();
        $modules = $this->_request->get_post('id');
        if(app::get('wap')->model('modules')->update(array('use_ssl'=>'false'), array('id'=>$modules))) {
            $this->end(true, app::get('wap')->_('更新成功'));
        } else {
            $this->end(false, app::get('wap')->_('更新失败'));
        }

    }
    
    public function desktop_ssl() {
        $this->begin();
        $use_ssl = app::get('desktop')->getConf('use_ssl');
        if($use_ssl) {
            app::get('desktop')->setConf('use_ssl', false);
        } else {
            if(!$this->ping()) {
                $this->end(false, app::get('wap')->_('您的服务器不支持SSL'));
            }
            app::get('desktop')->setConf('use_ssl',true);
        }
        $this->end(true, app::get('wap')->_('更新成功,请刷新页面。'));
    }

    private function ping() {
        $http = kernel::single('base_http');
        return $http->action('get','https://'. $_SERVER['SERVER_NAME'], null, null, null, true);
    }
    
    /*
     * 添加模块
     * @public
     */
    public function add() 
    {
        $this->display('admin/module/edit.html');
    }//End Function

    /*
     * 保存模块
     * @public
     */
    public function save() 
    {
        $this->begin();
        $modules = $this->_request->get_post('modules');
        $modules['enable'] = ($modules['enable'] == 'true') ? 'true' : 'false';
        if(isset($modules['path'])) $this->check_path($modules['path'], $modules['id']);
        if($modules['id'] > 0){
            $id = $modules['id'];
            unset($modules['id']);
            if(app::get('wap')->model('modules')->update($modules, array('id'=>$id))){
                $this->end(true, app::get('wap')->_('更新成功'));
            }else{
                $this->end(false, app::get('wap')->_('更新失败'));
            }
        }else{
            if(app::get('wap')->model('modules')->insert($modules)){
                $this->end(true,  app::get('wap')->_('添加成功'));
            }else{
                $this->end(false,  app::get('wap')->_('添加失败'));
            }
        }
    }//End Function

    private function check_path($path, $id=0) 
    {
        $tmp = preg_replace("/[^0-9a-zA-Z]/isU", "", $path);
        if($path != $tmp){
            $this->end(false,  app::get('wap')->_('路径标识只能由字母和数字组成'));
        }
        $obj = app::get('wap')->model('modules')->select()->where('path = ?', $path);
        if($id > 0){
            $obj->where('id != ?', $id);
        }
        if($obj->instance()->fetch_one()){
            $this->end(false, app::get('wap')->_('路径标识不得重复'));
        }
    }//End Function

}//End Class
