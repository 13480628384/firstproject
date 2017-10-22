<?php exit()?>
2017-09-27 09:38:52	150647633259cb012c0c17d	INFO	Scanning local Applications... 

2017-09-27 09:38:52	150647633259cb012c0c17d	INFO	Scanning local Applications ok.

2017-09-27 09:38:52	150647633259cb012c0c17d	INFO	Updating base_application_dbtable@feixiang.

2017-09-27 09:38:52	150647633259cb012c0c17d	INFO	ALTER IGNORE TABLE `sdb_feixiang_company` 
	ADD COLUMN `payCode` varchar(18) comment '支付企业代码' AFTER website_url,
	ADD COLUMN `payName` varchar(100) comment '支付企业名称' AFTER payCode;

2017-09-27 09:38:52	150647633259cb012c0c17d	INFO	ALTER IGNORE TABLE `sdb_feixiang_orders` 
	DROP COLUMN `discount`,
	DROP COLUMN `taxTotal`,
	DROP COLUMN `currency`,
	DROP COLUMN `freight`;

2017-09-27 09:38:52	150647633259cb012c0c17d	INFO	Updating base_application_cache_expires@feixiang.

2017-09-27 09:38:52	150647633259cb012c0c17d	INFO	Installing Cache_Expires DB:FEIXIANG_COMPANY

2017-09-27 09:38:52	150647633259cb012c0c17d	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-27 09:38:52	150647633259cb012c0c17d	INFO	Installing Cache_Expires DB:FEIXIANG_GOODS

2017-09-27 09:38:52	150647633259cb012c0c17d	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-27 09:38:52	150647633259cb012c0c17d	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS

2017-09-27 09:38:52	150647633259cb012c0c17d	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-27 09:38:52	150647633259cb012c0c17d	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS_ITEM

2017-09-27 09:38:52	150647633259cb012c0c17d	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-27 09:38:52	150647633259cb012c0c17d	INFO	Applications database and services is up-to-date, ok.

2017-09-27 09:39:48	150647638859cb01644d959	INFO	Installing service api.demo.test

2017-09-27 09:39:48	150647638859cb01644d959	INFO	Installing service openapi.TLpay_api

2017-09-27 09:39:48	150647638859cb01644d959	INFO	Installing api => demo.test.get_member_info   jack测试得到会员信息

2017-09-27 09:39:48	150647638859cb01644d959	INFO	Application demo installed... ok.

2017-09-27 15:38:31	150649791159cb557716685	INFO	Scanning local Applications... 

2017-09-27 15:38:31	150649791159cb557716685	INFO	Scanning local Applications ok.

2017-09-27 15:38:31	150649791159cb557716685	INFO	Updating base_application_dbtable@feixiang.

2017-09-27 15:38:31	150649791159cb557716685	INFO	ALTER IGNORE TABLE `sdb_feixiang_company` 
	ADD COLUMN `logisticsCode` varchar(18) default '' comment '物流企业代码' AFTER copName,
	ADD COLUMN `logisticsName` varchar(100) default '' comment '物流企业名称' AFTER logisticsCode;

2017-09-27 15:38:31	150649791159cb557716685	INFO	CREATE TABLE `sdb_feixiang_ebp` (
	`ebp_id` mediumint(8) unsigned not null auto_increment comment 'id',
	`ebpCode` varchar(18) comment '电商平台代码',
	`ebpName` varchar(30) comment '电商平台名称',
	`note` varchar(255) comment '备注',
	primary key (`ebp_id`)
)ENGINE = innodb DEFAULT CHARACTER SET utf8;

2017-09-27 15:38:31	150649791159cb557716685	INFO	ALTER IGNORE TABLE `sdb_feixiang_goods` 
	DROP COLUMN `production_enterprise`,
	DROP COLUMN `applicable_standards`;

2017-09-27 15:38:31	150649791159cb557716685	INFO	Updating base_application_cache_expires@feixiang.

2017-09-27 15:38:31	150649791159cb557716685	INFO	Installing Cache_Expires DB:FEIXIANG_COMPANY

2017-09-27 15:38:31	150649791159cb557716685	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-27 15:38:31	150649791159cb557716685	INFO	Installing Cache_Expires DB:FEIXIANG_EBP

2017-09-27 15:38:31	150649791159cb557716685	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-27 15:38:31	150649791159cb557716685	INFO	Installing Cache_Expires DB:FEIXIANG_GOODS

2017-09-27 15:38:31	150649791159cb557716685	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-27 15:38:31	150649791159cb557716685	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS

2017-09-27 15:38:31	150649791159cb557716685	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-27 15:38:31	150649791159cb557716685	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS_ITEM

2017-09-27 15:38:31	150649791159cb557716685	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-27 15:38:31	150649791159cb557716685	INFO	Updating desktop_application_menu@feixiang.

2017-09-27 15:38:31	150649791159cb557716685	INFO	Installing menu feixiang_ctl_admin_order

2017-09-27 15:38:31	150649791159cb557716685	INFO	Installing menu feixiang_ctl_admin_order

2017-09-27 15:38:31	150649791159cb557716685	INFO	Installing menu feixiang_ctl_admin_order

2017-09-27 15:38:31	150649791159cb557716685	INFO	Installing menu feixiang_ctl_admin_order

2017-09-27 15:38:31	150649791159cb557716685	INFO	Installing menu feixiang_ctl_admin_order

2017-09-27 15:38:31	150649791159cb557716685	INFO	Installing menu feixiang_ctl_admin_order

2017-09-27 15:38:31	150649791159cb557716685	INFO	Installing menu feixiang_ctl_admin_order

2017-09-27 15:38:31	150649791159cb557716685	INFO	Installing menu feixiang_ctl_admin_goods

2017-09-27 15:38:31	150649791159cb557716685	INFO	Installing menu feixiang_ctl_admin_goods

2017-09-27 15:38:31	150649791159cb557716685	INFO	Installing menu feixiang_ctl_admin_company

2017-09-27 15:38:31	150649791159cb557716685	INFO	Installing menu feixiang_ctl_admin_ebp

2017-09-27 15:38:31	150649791159cb557716685	INFO	Installing menu feixiang_ctl_admin_ebp

2017-09-27 15:38:31	150649791159cb557716685	INFO	Updating desktop_application_workground@feixiang.

2017-09-27 15:38:31	150649791159cb557716685	INFO	Installing workground fx_orders

2017-09-27 15:38:31	150649791159cb557716685	INFO	Installing workground fx_item

2017-09-27 15:38:31	150649791159cb557716685	INFO	Installing workground fx_ent

2017-09-27 15:38:31	150649791159cb557716685	INFO	Installing workground fx_ebp

2017-09-27 15:38:31	150649791159cb557716685	INFO	Updating desktop_application_permission@feixiang.

2017-09-27 15:38:31	150649791159cb557716685	INFO	Installing permission orderManager

2017-09-27 15:38:31	150649791159cb557716685	INFO	Installing permission addManager

2017-09-27 15:38:31	150649791159cb557716685	INFO	Installing permission excelOrder

2017-09-27 15:38:31	150649791159cb557716685	INFO	Installing permission excelLogiNo

2017-09-27 15:38:31	150649791159cb557716685	INFO	Installing permission goodsList

2017-09-27 15:38:31	150649791159cb557716685	INFO	Installing permission addGoods

2017-09-27 15:38:32	150649791159cb557716685	INFO	Installing permission companyManager

2017-09-27 15:38:32	150649791159cb557716685	INFO	Installing permission addCompany

2017-09-27 15:38:32	150649791159cb557716685	INFO	Installing permission ebpList

2017-09-27 15:38:32	150649791159cb557716685	INFO	Installing permission addEbp

2017-09-27 15:38:32	150649791159cb557716685	INFO	Updating desktop_application_panelgroup@feixiang.

2017-09-27 15:38:32	150649791159cb557716685	INFO	Updating desktop_application_adminpanel@feixiang.

2017-09-27 15:38:32	150649791159cb557716685	INFO	Updating desktop_application_widgets@feixiang.

2017-09-27 15:38:32	150649791159cb557716685	INFO	Updating site_application_explorer@feixiang.

2017-09-27 15:38:32	150649791159cb557716685	INFO	Updating site_application_module@feixiang.

2017-09-27 15:38:32	150649791159cb557716685	INFO	Applications database and services is up-to-date, ok.

2017-09-27 15:44:26	150649826559cb56da052d8	INFO	Scanning local Applications... 

2017-09-27 15:44:26	150649826559cb56da052d8	INFO	Scanning local Applications ok.

2017-09-27 15:44:26	150649826559cb56da052d8	INFO	Updating site_application_explorer@feixiang.

2017-09-27 15:44:26	150649826559cb56da052d8	INFO	Updating site_application_module@feixiang.

2017-09-27 15:44:26	150649826559cb56da052d8	INFO	Applications database and services is up-to-date, ok.

2017-09-27 16:30:50	150650105059cb61ba93a08	INFO	Scanning local Applications... 

2017-09-27 16:30:50	150650105059cb61ba93a08	INFO	Scanning local Applications ok.

2017-09-27 16:30:50	150650105059cb61ba93a08	INFO	Updating base_application_dbtable@feixiang.

2017-09-27 16:30:51	150650105059cb61ba93a08	INFO	Updating base_application_cache_expires@feixiang.

2017-09-27 16:30:51	150650105059cb61ba93a08	INFO	Installing Cache_Expires DB:FEIXIANG_COMPANY

2017-09-27 16:30:51	150650105059cb61ba93a08	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-27 16:30:51	150650105059cb61ba93a08	INFO	Installing Cache_Expires DB:FEIXIANG_EBP

2017-09-27 16:30:51	150650105059cb61ba93a08	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-27 16:30:51	150650105059cb61ba93a08	INFO	Installing Cache_Expires DB:FEIXIANG_GOODS

2017-09-27 16:30:51	150650105059cb61ba93a08	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-27 16:30:51	150650105059cb61ba93a08	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS

2017-09-27 16:30:51	150650105059cb61ba93a08	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-27 16:30:51	150650105059cb61ba93a08	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS_ITEM

2017-09-27 16:30:51	150650105059cb61ba93a08	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-27 16:30:51	150650105059cb61ba93a08	INFO	Applications database and services is up-to-date, ok.

2017-09-27 16:41:11	150650167159cb642759cd7	INFO	Scanning local Applications... 

2017-09-27 16:41:11	150650167159cb642759cd7	INFO	Scanning local Applications ok.

2017-09-27 16:41:11	150650167159cb642759cd7	INFO	Updating base_application_dbtable@feixiang.

2017-09-27 16:41:11	150650167159cb642759cd7	INFO	ALTER IGNORE TABLE `sdb_feixiang_orders_item` 
	DROP COLUMN `itemDescribe`;

2017-09-27 16:41:12	150650167159cb642759cd7	INFO	Updating base_application_cache_expires@feixiang.

2017-09-27 16:41:12	150650167159cb642759cd7	INFO	Installing Cache_Expires DB:FEIXIANG_COMPANY

2017-09-27 16:41:12	150650167159cb642759cd7	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-27 16:41:12	150650167159cb642759cd7	INFO	Installing Cache_Expires DB:FEIXIANG_EBP

2017-09-27 16:41:12	150650167159cb642759cd7	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-27 16:41:12	150650167159cb642759cd7	INFO	Installing Cache_Expires DB:FEIXIANG_GOODS

2017-09-27 16:41:12	150650167159cb642759cd7	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-27 16:41:12	150650167159cb642759cd7	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS

2017-09-27 16:41:12	150650167159cb642759cd7	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-27 16:41:12	150650167159cb642759cd7	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS_ITEM

2017-09-27 16:41:12	150650167159cb642759cd7	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-27 16:41:12	150650167159cb642759cd7	INFO	Applications database and services is up-to-date, ok.

2017-09-27 16:42:27	150650174759cb6473741ca	INFO	Scanning local Applications... 

2017-09-27 16:42:27	150650174759cb6473741ca	INFO	Scanning local Applications ok.

2017-09-27 16:42:27	150650174759cb6473741ca	INFO	Updating base_application_dbtable@feixiang.

2017-09-27 16:42:27	150650174759cb6473741ca	INFO	ALTER IGNORE TABLE `sdb_feixiang_orders_item` 
	DROP COLUMN `note`;

2017-09-27 16:42:27	150650174759cb6473741ca	INFO	Updating base_application_cache_expires@feixiang.

2017-09-27 16:42:27	150650174759cb6473741ca	INFO	Installing Cache_Expires DB:FEIXIANG_COMPANY

2017-09-27 16:42:27	150650174759cb6473741ca	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-27 16:42:27	150650174759cb6473741ca	INFO	Installing Cache_Expires DB:FEIXIANG_EBP

2017-09-27 16:42:27	150650174759cb6473741ca	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-27 16:42:27	150650174759cb6473741ca	INFO	Installing Cache_Expires DB:FEIXIANG_GOODS

2017-09-27 16:42:27	150650174759cb6473741ca	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-27 16:42:27	150650174759cb6473741ca	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS

2017-09-27 16:42:27	150650174759cb6473741ca	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-27 16:42:28	150650174759cb6473741ca	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS_ITEM

2017-09-27 16:42:28	150650174759cb6473741ca	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-27 16:42:28	150650174759cb6473741ca	INFO	Applications database and services is up-to-date, ok.

2017-09-27 17:10:26	150650342659cb6b02e2ec8	INFO	Scanning local Applications... 

2017-09-27 17:10:26	150650342659cb6b02e2ec8	INFO	Scanning local Applications ok.

2017-09-27 17:10:27	150650342659cb6b02e2ec8	INFO	Updating base_application_dbtable@feixiang.

2017-09-27 17:10:27	150650342659cb6b02e2ec8	INFO	ALTER IGNORE TABLE `sdb_feixiang_orders_item` 
	DROP COLUMN `barCode`;

2017-09-27 17:10:27	150650342659cb6b02e2ec8	INFO	Updating base_application_cache_expires@feixiang.

2017-09-27 17:10:27	150650342659cb6b02e2ec8	INFO	Installing Cache_Expires DB:FEIXIANG_COMPANY

2017-09-27 17:10:27	150650342659cb6b02e2ec8	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-27 17:10:27	150650342659cb6b02e2ec8	INFO	Installing Cache_Expires DB:FEIXIANG_EBP

2017-09-27 17:10:27	150650342659cb6b02e2ec8	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-27 17:10:27	150650342659cb6b02e2ec8	INFO	Installing Cache_Expires DB:FEIXIANG_GOODS

2017-09-27 17:10:27	150650342659cb6b02e2ec8	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-27 17:10:27	150650342659cb6b02e2ec8	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS

2017-09-27 17:10:27	150650342659cb6b02e2ec8	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-27 17:10:27	150650342659cb6b02e2ec8	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS_ITEM

2017-09-27 17:10:27	150650342659cb6b02e2ec8	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-27 17:10:27	150650342659cb6b02e2ec8	INFO	Applications database and services is up-to-date, ok.

2017-09-27 17:13:01	150650358159cb6b9de2607	INFO	Scanning local Applications... 

2017-09-27 17:13:02	150650358159cb6b9de2607	INFO	Scanning local Applications ok.

2017-09-27 17:13:02	150650358159cb6b9de2607	INFO	Updating base_application_dbtable@feixiang.

2017-09-27 17:13:02	150650358159cb6b9de2607	INFO	ALTER IGNORE TABLE `sdb_feixiang_goods` 
	ADD COLUMN `describe` varchar(400) comment '商品简介' AFTER goods_name;

2017-09-27 17:13:02	150650358159cb6b9de2607	INFO	Updating base_application_cache_expires@feixiang.

2017-09-27 17:13:02	150650358159cb6b9de2607	INFO	Installing Cache_Expires DB:FEIXIANG_COMPANY

2017-09-27 17:13:02	150650358159cb6b9de2607	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-27 17:13:02	150650358159cb6b9de2607	INFO	Installing Cache_Expires DB:FEIXIANG_EBP

2017-09-27 17:13:02	150650358159cb6b9de2607	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-27 17:13:02	150650358159cb6b9de2607	INFO	Installing Cache_Expires DB:FEIXIANG_GOODS

2017-09-27 17:13:02	150650358159cb6b9de2607	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-27 17:13:02	150650358159cb6b9de2607	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS

2017-09-27 17:13:02	150650358159cb6b9de2607	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-27 17:13:02	150650358159cb6b9de2607	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS_ITEM

2017-09-27 17:13:02	150650358159cb6b9de2607	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-27 17:13:02	150650358159cb6b9de2607	INFO	Applications database and services is up-to-date, ok.

2017-09-27 18:35:41	150650854159cb7efd8432c	INFO	Scanning local Applications... 

2017-09-27 18:35:41	150650854159cb7efd8432c	INFO	Scanning local Applications ok.

2017-09-27 18:35:41	150650854159cb7efd8432c	INFO	Updating base_application_dbtable@feixiang.

2017-09-27 18:35:42	150650854159cb7efd8432c	INFO	ALTER IGNORE TABLE `sdb_feixiang_orders` 
	ADD COLUMN `consigneeDistrict` varchar(6) comment '收货地址行政区划代码' AFTER consigneeAddress,
	ADD COLUMN `trade_time` int(10) unsigned comment '成交时间' AFTER pay_status,
	DROP COLUMN `consigneeDitrict`;

2017-09-27 18:35:42	150650854159cb7efd8432c	INFO	Updating base_application_cache_expires@feixiang.

2017-09-27 18:35:42	150650854159cb7efd8432c	INFO	Installing Cache_Expires DB:FEIXIANG_COMPANY

2017-09-27 18:35:42	150650854159cb7efd8432c	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-27 18:35:42	150650854159cb7efd8432c	INFO	Installing Cache_Expires DB:FEIXIANG_EBP

2017-09-27 18:35:42	150650854159cb7efd8432c	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-27 18:35:42	150650854159cb7efd8432c	INFO	Installing Cache_Expires DB:FEIXIANG_GOODS

2017-09-27 18:35:42	150650854159cb7efd8432c	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-27 18:35:42	150650854159cb7efd8432c	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS

2017-09-27 18:35:42	150650854159cb7efd8432c	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-27 18:35:42	150650854159cb7efd8432c	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS_ITEM

2017-09-27 18:35:42	150650854159cb7efd8432c	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-27 18:35:42	150650854159cb7efd8432c	INFO	Applications database and services is up-to-date, ok.

2017-09-27 19:02:32	150651015259cb854889ad4	INFO	Scanning local Applications... 

2017-09-27 19:02:32	150651015259cb854889ad4	INFO	Scanning local Applications ok.

2017-09-27 19:02:32	150651015259cb854889ad4	INFO	Applications database and services is up-to-date, ok.

