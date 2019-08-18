<?php

$redis = new Redis ();
$redis->connect('redis', 6379);

$key_name = 'edi-key-name';
$key_value = 'edi_value';

?>
