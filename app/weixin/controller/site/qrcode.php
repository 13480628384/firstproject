<?php
/**
 * ecclub licence
 *
 * @copyright  Copyright (c) 2005-2010 ecclub Technologies Inc. (http://www.ecclub.cn)
 * @license  http://www.ecclub.cn/ baidu */

//用于生成二维码。
//方法：<img src="qrcode.html?text=xxxxx">就可以获得二维码
//xxxxx为需要转化成二维码的字符串
class weixin_ctl_site_qrcode{
    public function index(){
        $text = $_GET['text'];
        echo weixin_qrcode_QRcode::png($text, false, QR_ECLEVEL_H, 3, 1);
        exit;
    }

}


