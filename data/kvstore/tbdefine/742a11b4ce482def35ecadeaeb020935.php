<?php exit(); ?>a:3:{s:5:"value";a:7:{s:7:"columns";a:7:{s:2:"id";a:5:{s:4:"type";s:6:"number";s:4:"pkey";b:1;s:5:"extra";s:14:"auto_increment";s:7:"comment";s:2:"ID";s:8:"realtype";s:21:"mediumint(8) unsigned";}s:8:"tag_type";a:6:{s:4:"type";a:1:{s:6:"weixin";s:6:"微信";}s:8:"is_title";b:1;s:7:"default";s:6:"weixin";s:8:"required";b:1;s:7:"comment";s:12:"绑定平台";s:8:"realtype";s:14:"enum('weixin')";}s:7:"open_id";a:3:{s:4:"type";s:12:"varchar(100)";s:7:"comment";s:20:"绑定平台唯一ID";s:8:"realtype";s:12:"varchar(100)";}s:8:"tag_name";a:3:{s:4:"type";s:12:"varchar(300)";s:7:"comment";s:21:"绑定平台的昵称";s:8:"realtype";s:12:"varchar(300)";}s:9:"member_id";a:4:{s:4:"type";s:11:"varchar(32)";s:8:"required";b:1;s:7:"comment";s:12:"绑定会员";s:8:"realtype";s:11:"varchar(32)";}s:8:"disabled";a:3:{s:4:"type";s:4:"bool";s:7:"default";s:5:"false";s:8:"realtype";s:20:"enum('true','false')";}s:10:"createtime";a:3:{s:4:"type";s:4:"time";s:7:"comment";s:12:"创建时间";s:8:"realtype";s:16:"int(10) unsigned";}}s:5:"index";a:1:{s:7:"open_id";a:2:{s:7:"columns";a:1:{i:0;s:7:"open_id";}s:6:"prefix";s:6:"UNIQUE";}}s:6:"engine";s:6:"innodb";s:7:"comment";s:21:"绑定第三方平台";s:8:"idColumn";s:2:"id";s:5:"pkeys";a:1:{s:2:"id";s:2:"id";}s:10:"textColumn";s:8:"tag_type";}s:3:"ttl";i:0;s:8:"dateline";i:1507889370;}