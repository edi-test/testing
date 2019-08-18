<?php

include 'redis_init.php';

$redis->set( $key_name, $key_value ); 

$get_the_value_of_the_key = $redis->get($key_name);
echo "Key $key_name has been set with the value $get_the_value_of_the_key !";
echo "\n";
?> 


