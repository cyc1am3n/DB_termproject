 <?php
    include"session.php";

    ?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>예약 관리</title>
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
         <input type="button" value="MENU"onclick="javascripｔ:history.go(-1)">
      </div>
      <div id="jb-sidebar-left">
        <h2>예약관리</h2>
        <ul>


        </ul>
      </div>

      <div id="jb-sidebar-right">

        <?php
        if(!isset($_COOKIE[$_SESSION['ses_userid']])) {
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
