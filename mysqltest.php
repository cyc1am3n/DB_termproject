<?php
echo "MySql ���� �׽�Ʈ<br>";
$db = mysqli_connect("localhost", "root", "1234", "test");
if($db){echo "connect : ����<br>";}
else{echo "disconnect : ����<br>";}
$result = mysqli_query($db, 'SELECT VERSION() as VERSION');
$data = mysqli_fetch_assoc($result);
echo $data['VERSION'];
?>