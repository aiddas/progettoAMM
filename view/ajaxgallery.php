<?php
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
//header('Content-type: application/json');
$json = array();
$json["id"] = $data->getId();
$json["url"] = $data->getUrl();
echo json_encode($json);
?>
