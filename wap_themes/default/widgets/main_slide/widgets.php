<?php
/**
 * ecclub licence
 *
 * @copyright  Copyright (c) 2005-2013 ecclub Technologies Inc. (http://www.ecclub.cn)
 * @license  http://www.ecclub.cn/ ecclub License
 */

/*基础配置项*/
$setting['author']='zinkwind@gmail.com';
$setting['version']='v1.0';
$setting['name']='首页主广告';
$setting['order']=0;
$setting['stime']='2012-08';
$setting['catalog']='文章相关';
$setting['description'] = '展示模板使用的第一屏一级主广告';
$setting['userinfo'] = '';
$setting['usual']    = '1';
$setting['tag']    = 'auto';
$setting['template'] = array(
                            'default.html'=>app::get('b2c')->_('默认')
                        );
?>
