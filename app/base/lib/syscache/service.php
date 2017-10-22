<?php
/**
 * ecclub licence
 *
 * @copyright  Copyright (c) 2005-2012 ecclub Technologies Inc. (http://www.ecclub.cn)
 * @license  http://www.ecclub.cn/ baidu
 */

class base_syscache_service extends base_syscache_abstract implements base_interface_syscache_farmer {
    public function get_data(){
        $filter = array('content_type' => 'service');

        $pri_services = app::get('base')->model('app_content')->getList('content_name, content_path, content_type', $filter, 0, -1, 'ordernum asc, input_time desc');
        $services = array();

        foreach ($pri_services as $service) {
            $services[$service['content_name']]['list'][] = $service['content_path'];
        }
        return $services;
    }
}
