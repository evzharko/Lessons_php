$query_select = "SELECT * FROM sip_peers ORDER BY name";

$res = mysqli_query($link_asterisk, $query_select);
$row_peers = mysqli_fetch_all($res, MYSQLI_ASSOC);
