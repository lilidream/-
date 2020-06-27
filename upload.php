<?php
$money = $_GET['money'];
$isMax = $_GET['isMax'];

$file = file_get_contents("data.json");
$data = json_decode($file,TRUE);
$data['playTime'] += 1;
$data['totalMoney'] += $money;
$data['isMaxTime'] += $isMax;
$data['updateTime'] = date("Y-m-d H:i:s");
file_put_contents("data.json",json_encode($data,JSON_UNESCAPED_UNICODE));
echo "ok";
?>