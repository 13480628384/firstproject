<?php exit()?>
2017-09-23 09:48:50	150613133059c5bd82b0f16	ERR	SELECT * FROM sdb_feixiang_orders WHERE 1 AND push311 = "yes" LIMIT , :You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1
2017-09-23 09:48:50	150613133059c5bd82b0f16	ERR	SELECT  order_id,orderNo,ebpCode,ebpName,ebcCode,ebcName,copName,copCode,dxpMode,dxpId,goodsValue,freight,discount,taxTotal,acturalPaid,currency,buyerRegNo,buyerName,buyerIdType,buyerIdNumber,payCode,payName,payTransactionId,batchNumbers,consignee,consigneeTelephone,consigneeAddress,consigneeDitrict,logisticsNo,billNo,note,push311  FROM sdb_feixiang_orders WHERE 1 AND push311 = "yes" LIMIT 0, 20:Unknown column 'ebpCode' in 'field list'
2017-09-23 10:03:00	150613218059c5c0d429e13	ERR	SELECT * FROM sdb_feixiang_orders WHERE 1 AND push311 = "yes" LIMIT , :You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1
2017-09-23 10:03:00	150613218059c5c0d429e13	ERR	SELECT  order_id,orderNo,ebpCode,ebpName,ebcCode,ebcName,copName,copCode,dxpMode,dxpId,goodsValue,freight,discount,taxTotal,acturalPaid,currency,buyerRegNo,buyerName,buyerIdType,buyerIdNumber,payCode,payName,payTransactionId,batchNumbers,consignee,consigneeTelephone,consigneeAddress,consigneeDitrict,logisticsNo,billNo,note,push311  FROM sdb_feixiang_orders WHERE 1 AND push311 = "yes" LIMIT 0, 20:Unknown column 'ebpCode' in 'field list'
2017-09-23 10:20:53	150613325359c5c505438f2	ERR	SELECT company_id,1 as column_edit,`dxpId`,`company_name`,`copName`,`ebcName`,`ebpName`,`copCode`,`ebcCode`,`ebpCode`,`website_url` FROM `sdb_feixiang_company` WHERE 1 ORDER BY last_modify DESC LIMIT 0, 20:Unknown column 'last_modify' in 'order clause'
2017-09-23 10:20:54	150613325459c5c5064eaef	ERR	SELECT company_id,1 as column_edit,`dxpId`,`company_name`,`copName`,`ebcName`,`ebpName`,`copCode`,`ebcCode`,`ebpCode`,`website_url` FROM `sdb_feixiang_company` WHERE 1 ORDER BY last_modify DESC LIMIT 0, 20:Unknown column 'last_modify' in 'order clause'
2017-09-23 10:20:57	150613325759c5c509919a2	ERR	SELECT company_id,1 as column_edit,`dxpId`,`company_name`,`copName`,`ebcName`,`ebpName`,`copCode`,`ebcCode`,`ebpCode`,`website_url` FROM `sdb_feixiang_company` WHERE 1 ORDER BY last_modify DESC LIMIT 0, 20:Unknown column 'last_modify' in 'order clause'
2017-09-23 10:22:52	150613337259c5c57c69305	ERR	SELECT * FROM sdb_feixiang_orders WHERE 1 AND push311 = "yes" LIMIT , :You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1
2017-09-23 10:22:52	150613337259c5c57c69305	ERR	SELECT  order_id,orderNo,ebpCode,ebpName,ebcCode,ebcName,copName,copCode,dxpMode,dxpId,goodsValue,freight,discount,taxTotal,acturalPaid,currency,buyerRegNo,buyerName,buyerIdType,buyerIdNumber,payCode,payName,payTransactionId,batchNumbers,consignee,consigneeTelephone,consigneeAddress,consigneeDitrict,logisticsNo,billNo,note,push311  FROM sdb_feixiang_orders WHERE 1 AND push311 = "yes" LIMIT 0, 20:Unknown column 'ebpCode' in 'field list'
2017-09-23 18:34:31	150616287159c638b799649	INFO	crontab task:feixiang_tasks_order_customs add_time:2017-09-23 18:09:34 | add queue ok
2017-09-23 18:35:35	150616293559c638f73cf95	INFO	crontab task:feixiang_tasks_order_customs add_time:2017-09-23 18:09:35 | add queue ok
2017-09-23 18:38:04	150616308459c6398c8a189	INFO	crontab task:feixiang_tasks_order_customs add_time:2017-09-23 18:09:38 | add queue ok
