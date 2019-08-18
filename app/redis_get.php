<?php

include 'redis_init.php';

$content = $redis->get($key_name);

echo "Key $key_name has been set with the value $content!"; 
echo "\n";
?>
