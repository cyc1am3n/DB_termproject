<!DOCTYPE html>
<html>
   <meta charset="utf-8">
<?php

$host = "localhost";
$user = "root";
$pw = "1234";
$dbName = "database";
$conn = mysqli_connect($host,$user,$pw,$dbName);

if (mysqli_connect_errno($conn)) {
   echo "데이터베이스 연결 실패: " . mysqli_connect_error();
} else {
   echo "데이터베이스 연결 성공<p/>";
}

 $id=$_POST['id'];
 $pwd=$_POST['pwd'];
 $pwd2=md5($_POST['pwd2']);
 $name=$_POST['name'];
 $addr=$_POST['addr'];
 $sex=$_POST['sex'];
 $birthDay=$_POST['birthDay'];
 $email=$_POST['email'];


 $sql = "INSERT INTO member(id, pwd, name, addr, sex, birthDay, email)";
 $sql = $sql. "values('$id','$pwd','$name','$addr','$sex','$birthDay','$email')";
 if($conn->query($sql)){
  echo 'success inserting <p/>';
  echo $name.'님 가입 되셨습니다.<p/>';
 }else{
  echo 'SQL 오류가 생겨 회원가입에 실패했습니다.<p/>';
 }
mysqli_close($conn);

?>
<input type="button" value="로그인하러가기" onclick="location='./index.php'">
</html>