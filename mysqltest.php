<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>MySql-PHP ���� �׽�Ʈ</title>
</head>
<body>

<?php
echo "MySql ���� �׽�Ʈ<br>";
$db = mysqli_connect("localhost", "root", "1234", "database");
if($db){echo "connect : ����<br>";}
else{echo "disconnect : ����<br>";}
$result = mysqli_query($db, 'SELECT VERSION() as VERSION');
$data = mysqli_fetch_assoc($result);
echo $data['VERSION'];
?>