<?php
global $Room;
$id = ceil($connection->user['room']);
if ($data2['time'] > $Room[$id]['time'] || $Room[$id]['user'][$connection->user['id']]->user['tpzt'] != '-1' || $data2['time'] < $Room[$id]['timexx']) {
	return false;
}
$Room[$id]['user'][$connection->user['id']]->user['tpzt'] = '1';
$tpsl = 0;
$zbsl = 0;
foreach ($Room[$id]['user'] as $connection3) {
	if ($connection3->user['zt'] == '1') {
		$zbsl = $zbsl + 1;
	}
	if ($connection3->user['tpzt'] != '-1' && $connection3->user['zt'] == '1') {
		$tpsl = $tpsl + 1;
	}
	if ($connection3->user['online'] != '-1') {
		$msg = [];
		$msg['result'] = $Room[$id]['fenpai'];
	}
}
$Room[$id]['xx']['zt'] = '6';
$data = array();
$data['act'] = 'setfanpai';
$data['time'] = $Room[$id]['timexx'];
$data['room'] = $id;
reqact($data, '');