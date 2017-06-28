 <?php
    include"session.php";
    include"staff_cookie.php";

    ?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>로그인</title>
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
        <h1>고려도서관</h1>
      </div>
      <div id="jb-sidebar-left">
        <h2>관리자 메뉴</h2>
        <ul>

          <li><a href="book_info.php " >도서 목록</a></li><br>
          <li><a href="book_borrow.php " >대출 관리</a></li><br>
          <li><a href="book_reservation.php " >예약 관리</a></li><br>
          <li><a href="book_review.php " >서평 게시판</a></li><br>

        </ul>
      </div>

      <div id="jb-sidebar-right">

        <?php

        if(!isset($_COOKIE[$cookie_name])) {
            echo "Cookie named '" . $cookie_name . "' is not set!";
        } else {
            echo $_SESSION['ses_username'].'님 안녕하세요<p/>';
            echo '<a href="delete_cookie.php">로그아웃 하기</a>';
        }
?>


      </div>

    </div>
  </body>
</html>
