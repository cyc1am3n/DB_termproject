<!DOCTYPE html>
<html>
<head>
<title>회원 가입</title>
</head>
<body>
<form name="join" method="post" action="memberSave.php">
 <h1>정보를 입력해주세요.</h1>
 <table border="1">
  <tr>
   <td>ID</td>
   <td><input type="text" size="30" name="id"></td>
  </tr>
  <tr>
   <td>비밀번호</td>
   <td><input type="password" size="30" name="pwd"></td>
  </tr>
  <tr>
   <td>비밀번호 확인</td>
   <td><input type="password" size="30" name="pwd2"></td>
  </tr>
  <tr>
   <td>이름</td>
   <td><input type="text" size="12" maxlength="10" name="name"></td>
  </tr>
  <tr>
   <td>주소</td>
   <td><input type="text" size="40" name="addr"></td>
  </tr>
  <tr>
   <td>성별(0: male 1: female)</td>
   <td><input type="text" size="6" maxlength="2" name="sex"></td>
  </tr>
  <tr>
   <td>생년월일(YYYYMMDD)</td>
   <td><input type="text" size="6" maxlength="8" name="birthDay"></td>
  </tr>
  <tr>
   <td>E-Mail</td>
   <td><input type="text" size="30" name="email"></td>
  </tr>
 </table>
 <input type=submit value="생성"><input type=reset value="지우기">
 <input type="button" value="뒤로가기"onclick="javascripｔ:history.go(-1)">
</form>
</body>
</html>