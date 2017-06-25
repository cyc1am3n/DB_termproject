<?php
 $host = 'localhost';
 $user = 'root';
 $pw = '1234';
 $dbName = 'database';
 $mysqli = new mysqli($host, $user, $pw, $dbName);


 $id=$_POST['id'];
 $password=md5($_POST['pwd']);
 $password2=md5($_POST['pwd2']);
 $name=$_POST['name'];
 $address=$_POST['addr'];
 $sex=$_POST['sex'];
 $birthDay=$_POST['birthDay'];
 $email=$_POST['email'];

if($password != $password2) {
	echo '비밀번호를 확인해주세요';
	$mysqli->close();
}

 $sql = "insert into member_info (id, pwd, name, addr, sex, birthDay, email) values('$id','$password','$name','$address','$sex','$birthDay','$email')";

 if($mysqli->query($sql)){
  echo '회원가입에 성공했습니다.';
 }else{
  echo 'SQL 오류가 생겨 회원가입에 실패했습니다.';
 }
 <input type="button" value="뒤로가기"onclick="javascripｔ:history.go(-1)">
?>