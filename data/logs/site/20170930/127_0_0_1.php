<?php exit()?>
2017-09-30 16:25:08	150675990759cf54e3f1c54	INFO	Scanning local Applications... 

2017-09-30 16:25:08	150675990759cf54e3f1c54	INFO	Scanning local Applications ok.

2017-09-30 16:25:08	150675990759cf54e3f1c54	INFO	Updating base_application_dbtable@feixiang.

2017-09-30 16:25:08	150675990759cf54e3f1c54	INFO	ALTER IGNORE TABLE `sdb_feixiang_goods` 
	MODIFY COLUMN `price` decimal(20,2) comment '单价';

2017-09-30 16:25:08	150675990759cf54e3f1c54	INFO	ALTER IGNORE TABLE `sdb_feixiang_orders` 
	MODIFY COLUMN `goodsValue` decimal(20,2) comment '商品价格',
	MODIFY COLUMN `acturalPaid` decimal(20,2) comment '实际支付金额',
	ADD COLUMN `time312` varchar(20) comment '312查询时间' AFTER push311,
	ADD COLUMN `time512` varchar(20) comment '512查询时间' AFTER result512,
	ADD COLUMN `time622` varchar(20) comment '622查询时间' AFTER push621;

2017-09-30 16:25:08	150675990759cf54e3f1c54	INFO	ALTER IGNORE TABLE `sdb_feixiang_orders_item` 
	MODIFY COLUMN `price` decimal(20,2) comment '单价',
	MODIFY COLUMN `totalPrice` decimal(20,2) comment '总价';

2017-09-30 16:25:08	150675990759cf54e3f1c54	INFO	Updating base_application_cache_expires@feixiang.

2017-09-30 16:25:08	150675990759cf54e3f1c54	INFO	Installing Cache_Expires DB:FEIXIANG_COMPANY

2017-09-30 16:25:08	150675990759cf54e3f1c54	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-30 16:25:08	150675990759cf54e3f1c54	INFO	Installing Cache_Expires DB:FEIXIANG_EBP

2017-09-30 16:25:08	150675990759cf54e3f1c54	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-30 16:25:08	150675990759cf54e3f1c54	INFO	Installing Cache_Expires DB:FEIXIANG_GOODS

2017-09-30 16:25:08	150675990759cf54e3f1c54	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-30 16:25:08	150675990759cf54e3f1c54	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS

2017-09-30 16:25:08	150675990759cf54e3f1c54	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-30 16:25:08	150675990759cf54e3f1c54	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS_ITEM

2017-09-30 16:25:08	150675990759cf54e3f1c54	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-30 16:25:09	150675990759cf54e3f1c54	INFO	Applications database and services is up-to-date, ok.

2017-09-30 16:48:48	150676132859cf5a7010780	INFO	Scanning local Applications... 

2017-09-30 16:48:48	150676132859cf5a7010780	INFO	Scanning local Applications ok.

2017-09-30 16:48:48	150676132859cf5a7010780	INFO	Updating base_application_dbtable@feixiang.

2017-09-30 16:48:48	150676132859cf5a7010780	INFO	ALTER IGNORE TABLE `sdb_feixiang_orders` 
	DROP COLUMN `time312`,
	DROP COLUMN `time512`,
	DROP COLUMN `time622`;

2017-09-30 16:48:48	150676132859cf5a7010780	INFO	Updating base_application_cache_expires@feixiang.

2017-09-30 16:48:48	150676132859cf5a7010780	INFO	Installing Cache_Expires DB:FEIXIANG_COMPANY

2017-09-30 16:48:48	150676132859cf5a7010780	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-30 16:48:48	150676132859cf5a7010780	INFO	Installing Cache_Expires DB:FEIXIANG_EBP

2017-09-30 16:48:48	150676132859cf5a7010780	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-30 16:48:48	150676132859cf5a7010780	INFO	Installing Cache_Expires DB:FEIXIANG_GOODS

2017-09-30 16:48:48	150676132859cf5a7010780	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-30 16:48:48	150676132859cf5a7010780	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS

2017-09-30 16:48:48	150676132859cf5a7010780	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-30 16:48:48	150676132859cf5a7010780	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS_ITEM

2017-09-30 16:48:48	150676132859cf5a7010780	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-30 16:48:48	150676132859cf5a7010780	INFO	Applications database and services is up-to-date, ok.

