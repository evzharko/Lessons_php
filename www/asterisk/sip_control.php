<?php

require_once './config/config_asterisk.php';

/* Выводим существуеющие sip номера */
$query_select = "SELECT * FROM sip_peers ORDER BY name";

$res = mysqli_query($link_asterisk, $query_select);
$row_peers = mysqli_fetch_all($res, MYSQLI_ASSOC);

/* Выводим участвует ли медежер в очередях звонков */
$query_select_queue = "SELECT * FROM asterisk.queue_member_table GROUP BY interface ORDER BY interface";

$res = mysqli_query($link_asterisk, $query_select_queue);
$row_queue = mysqli_fetch_all($res, MYSQLI_ASSOC);

/* Узанем в каком созвездии находиться менеджер */
$query_admin_crm = "SELECT login, group_id, ag.name, au.sip_phone
	FROM admin_user AS au
	INNER JOIN admin_user_groups AS aug ON au.id=aug.user_id
	INNER JOIN admin_groups AS ag ON ag.id=aug.group_id
	WHERE au.sip_phone > 0 
	ORDER BY au.sip_phone";

$res_crm = mysqli_query($link_work, $query_admin_crm);
$row_crm = mysqli_fetch_all($res_crm,MYSQLI_ASSOC);

$sip_asterisk = [];
foreach ($row_queue as $value){
    $sip_asterisk[] = preg_replace("/[^,.0-9]/", '',$value['interface']);
}

$sip_crm = [];
foreach ($row_crm as $value){
    $sip_crm[] = $value['sip_phone'];
}

/* Если номера с админки и с базы asterisk совпадаю значит менеджер участвует в очереди звоноков(лидер, менеджер) */
$result_array = array_intersect($sip_asterisk, $sip_crm);


?>
