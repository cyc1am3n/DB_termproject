 <?
    include"session.php";   //session.php파일을 포함

    ?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>DB</title>
    <style>
     a:link {
     color: black;
     background-color: transparent;
     text-decoration: none;
     }
     a:visited {
     color: gray;
     background-color: transparent;
     text-decoration: none;
     }
     a:hover {
     color: gray;
     background-color: transparent;
     text-decoration: underline;
     }
     a:active {
     color: black;
     background-color: transparent;
     text-decoration: underline;
     }
      #jb-container {
        width: 940px;
        height: 450px;
        margin: 0px ;
        padding: 20px;
        border: 1px solid #bcbcbc;
      }
      #jb-header {
        padding: 20px;
        margin-bottom: 20px;
        border: 1px solid #bcbcbc;
      }
      #jb-sidebar-left {
        width: 650px;
        height: 170px;
        padding: 20px;
        margin-right: 20px;
        margin-bottom: 20px;
        float: left;
        border: 1px solid #bcbcbc;
      }
      #jb-content {
        width: 450px;
        padding: 20px;
        margin-bottom: 20px;
        float: left;
        border: 1px solid #bcbcbc;
      }
      #jb-sidebar-right {
        width: 160px;
        padding: 20px;
        margin-bottom: 20px;
        float: right;
        border: 1px solid #bcbcbc;
      }
      #jb-footer {
        clear: both;
        padding: 20px;
        border: 1px solid #bcbcbc;
      }
    </style>
  </head>


<body>
    <div id="jb-container">
      <div id="jb-header">
        <h1>WELCOME</h1>
      </div>
      <div id="jb-sidebar-left">
        <h2>Menu</h2>
        <ul>

          <li><a href="10.html " >도서 목록</a></li><br>
          <li><a href="20.html " >대출 관리</a></li><br>
          <li><a href="30.html " >예약 관리</a></li><br>

        </ul>
      </div>

      <div id="jb-sidebar-right">

        <?php

    $host = "localhost";
    $user = "root";
    $pw = "1234";
    $dbName = "database";
    $conn = mysqli_connect($host,$user,$pw,$dbName);

    $memberId = $_POST['id'];
    $memberPwd = $_POST['pwd'];
    $sql = "SELECT * FROM member WHERE id = '$memberId' AND pwd = '$memberPwd'"; //my sqli 연결의 끈을 생성시키고, 쿼리를 실행
      //고른다 모든것 account_info테이블로부터 id와 pwd가 일치하는 것을
    $res = $conn->query($sql); //실행결과는 $res에 저장


        $row = $res->fetch_array(MYSQLI_ASSOC); // 넘어온 결과를 한 행씩 패치해서 $row라는 배열에 담는다.

        if ($row != null) {                                                 //만약 배열에 존재한다면
            $_SESSION['ses_username'] = $row['name'];                           // 세션을 만들어준다.
            echo $_SESSION['ses_username'].'님 안녕하세요<p/>';                   // name님 안녕하세요.
            echo '<a href="./index.php">로그아웃 하기</a>';           //로그아웃 페이지 링크.
        }

        if($row == null){                                                    //만약 배열에 아무것도 없다면

         echo '로그인에 실패했습니다.';          //애러 화면으로 넘김



        }


?>


      </div>

    </div>
  </body>
</html>
