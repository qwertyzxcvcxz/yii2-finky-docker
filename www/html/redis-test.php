<?php 


/**/
$redis = new Redis();
$redis->connect('redis');
$redis->select(2);
$redis->incr('z');

$result = $redis->get('z');
echo $result;
//phpinfo(); 

?>