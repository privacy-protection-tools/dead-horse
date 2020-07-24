<?php

define('ROOT_DIR', __DIR__ . '/');
set_time_limit(600);
error_reporting(0);

if(PHP_SAPI != 'cli'){
    die('nothing.');
}

date_default_timezone_set('Asia/Shanghai');
if(!is_file(ROOT_DIR . 'white_domain_list.php')){
	return false;
}

$list = require(ROOT_DIR . 'white_domain_list.php');

if(!is_array($list)){
	return false;
}
$fp = fopen(ROOT_DIR . '../anti-ad-white-list.txt', 'w');
foreach($list as $lk => $lv){
	if($lv >= 0){
		fwrite($fp, $lk . "\n");
	}
}

fclose($fp);