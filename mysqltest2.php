<?php
$conn = mysqli_connect("localhost","root","1234");
if (mysqli_connect_errno()){echo "MySQL 연결 오류: " . mysqli_connect_error();}
$sql = "CREATE DATABASE test2";
if (mysqli_query($conn,$sql)){echo "성공적으로 test2 가 만들어졌습니다.";}
else {echo "데이터베이스 만들기 오류: " . mysqli_error($conn);}
?>