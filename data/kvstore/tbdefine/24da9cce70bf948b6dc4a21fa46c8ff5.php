<?php exit(); ?>a:3:{s:5:"value";a:7:{s:7:"columns";a:6:{s:10:"account_id";a:5:{s:4:"type";s:6:"number";s:4:"pkey";b:1;s:5:"extra";s:14:"auto_increment";s:7:"comment";s:14:"账户序号ID";s:8:"realtype";s:21:"mediumint(8) unsigned";}s:12:"account_type";a:3:{s:4:"type";s:11:"varchar(30)";s:7:"comment";s:35:"账户类型(会员和管理员等)";s:8:"realtype";s:11:"varchar(30)";}s:10:"login_name";a:5:{s:4:"type";s:12:"varchar(100)";s:8:"is_title";b:1;s:8:"required";b:1;s:7:"comment";s:15:"登录用户名";s:8:"realtype";s:12:"varchar(100)";}s:14:"login_password";a:4:{s:4:"type";s:11:"varchar(32)";s:8:"required";b:1;s:7:"comment";s:12:"登录密码";s:8:"realtype";s:11:"varchar(32)";}s:8:"disabled";a:3:{s:4:"type";s:4:"bool";s:7:"default";s:5:"false";s:8:"realtype";s:20:"enum('true','false')";}s:10:"createtime";a:3:{s:4:"type";s:4:"time";s:7:"comment";s:12:"创建时间";s:8:"realtype";s:16:"int(10) unsigned";}}s:5:"index";a:1:{s:7:"account";a:2:{s:7:"columns";a:2:{i:0;s:12:"account_type";i:1;s:10:"login_name";}s:6:"prefix";s:6:"UNIQUE";}}s:6:"engine";s:6:"innodb";s:7:"comment";s:21:"用户权限账户表";s:8:"idColumn";s:10:"account_id";s:5:"pkeys";a:1:{s:10:"account_id";s:10:"account_id";}s:10:"textColumn";s:10:"login_name";}s:3:"ttl";i:0;s:8:"dateline";i:1507889370;}