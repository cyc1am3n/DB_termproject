<?php
include"session.php";

$host = "localhost";
$user = "root";
$pw = "1234";
$dbName = "database";
$conn = mysqli_connect($host,$user,$pw,$dbName);

$cookie_name = $_POST['id'];
$cookie_value = $_POST['pwd'];
$sql = "SELECT * FROM staff WHERE id = '$cookie_name' AND pwd = '$cookie_value'";

$res = $conn->query($sql);
        $row = $res->fetch_array(MYSQLI_ASSOC);
        if ($row != null) {
        	setcookie($cookie_name, md5($cookie_value), time() + 3600, "/");
            $_SESSION['ses_userid'] = $row['id'];
            $_SESSION['ses_username'] = $row['name'];


        }

        if($row == null){
         echo '로그인에 실패했습니다.<p/>';
         echo '<a href="./index.php">메인페이지로 가기</a>';
         exit(0);
        }
?>

