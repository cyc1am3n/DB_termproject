<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>도서 대출 시스템</title>
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
        <h1>도서 대출 시스템: 고려도서관</h1>
      </div>
      <div id="jb-sidebar-left">
        <h2>환영합니다~!</h2>

        <ul>
            로그인 해주세요...
        </ul>
      </div>


<div id="jb-sidebar-right">
        <h2>login</h2>
            <form  method="post" action="login.php" >
            ID : <input type="text" name="id" /><br />
            PASSWORD : <input type="password" name="pwd" /><br />
            <input type="submit" value="로그인"/>

            <input type="button" name ="버튼" value="회원가입" onclick="location='signUp.php'";>
           </form>
</div>





    </div>
  </body>
</html>