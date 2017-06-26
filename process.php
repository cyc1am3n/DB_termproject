<?php
	// 미리 정의된 ID와 암호 //
	$id = "user";
	$password = "password";

	// PHP에서 setcookie 함수는 HTML이 출력되기 전에 실행되어야 합니다. //
	// ID와 암호를 비교하여 로그인 처리하는 것은 이 곳에어 미리 처리합니다. //
	if ((strcmp($_POST["id"], $id) == 0) && (strcmp($_POST["password"], $password) == 0))
	{
		// 쿠키 만들기: setcookie("변수명", 값, 만료시각);
		setcookie("member_id", $_POST["member_id"], time() + 3600);
		setcookie("member_password", $_POST["member_password"], time() + 3600);
	}
?>
<!DOCTYPE html>
<html lang="ko">
	<head>
		<meta charset="utf-8">
		<title>로그인 처리</title>
	</head>
	<body>
		<!-- POST 방식으로 전달된 데이터를 읽어올 때는 $_POST["변수명"]을 사용합니다. -->

		<!-- ID가 전달되었는지 검사 -->
		<? if (!isset($_POST["member_id"])) { ?>
		<p style="text-align: center;">ID가 입력되지 않았습니다.</p>
		<p style="text-align: center;"><a href="login.php">로그인하기</a></p>

		<!-- 암호가 전달되었는지 검사 -->
		<? } else if (!isset($_POST["member_password"])) { ?>
		<p style="text-align: center;">암호가 입력되지 않았습니다.</p>
		<p style="text-align: center;"><a href="login.php">로그인하기</a></p>

		<!-- ID와 암호가 전달되었다면 -->
		<? } else { ?>
			<!-- ID 잘못 입력 시 -->
			<? if(strcmp($_POST["member_id"], $member_id) != 0) { ?>
			<p style="text-align: center;">ID가 일치하지 않습니다.</p>
			<p style="text-align: center;"><a href="login.php">다시 로그인하기</a></p>
			<!-- 암호 잘못 입력 시 -->
			<? } else if (strcmp($_POST["member_password"], $member_password) != 0) { ?>
			<p style="text-align: center;">암호가 일치하지 않습니다.</p>
			<p style="text-align: center;"><a href="login.php">다시 로그인하기</a></p>
			<!-- 로그인 성공 -->
			<? } else { ?>
			<p style="text-align: center;">로그인 성공</p>
			<p style="text-align: center;"><a href="membership.php">회원 페이지</a></p>
			<? } ?>
		<? } ?>
	</body>
</html>