 <?php
include"session.php";
setcookie($cookie_name, md5($cookie_value), time() - 3600);
?>

<html>
<body>

<?php
echo $_SESSION['ses_username']."님 로그아웃 되었습니다.<p/>";
echo '<a href="./index.php">메인페이지로 가기</a>';
?>

</body>
</html>