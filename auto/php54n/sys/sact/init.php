<?php
if ($data2['key'] = 'HeroHu') {
	$connection->sfxt = 1;
	$data2['act'] = 'list';
	reqact($data2, $connection);
} else {
	$connection->sfxt = 0;
}