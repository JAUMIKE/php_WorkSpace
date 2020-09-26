<?php
session_start();
//宣告一個變數
$errorMessage="";
if (isset($_POST["btnOK"])) {
  //檢查登入頁姓名欄位是否為空值，如果不是空值才會導回首頁
  if ($_POST["txtUserName"] != "") {
    $_SESSION["userName"] = $_POST["txtUserName"];
    
    header("location:index.php");
  }
  //如果姓名欄位未填值顯示錯誤訊息
  else{
    $errorMessage = "Please keying correct message!";
  }


  //exit();  
}

?>

<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Lab - Login</title>
</head>

<body>
  <form id="form1" name="form1" method="post" action="login.php">
    <table width="300" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#F2F2F2">
      <tr>
        <td colspan="2" align="center" bgcolor="#CCCCCC">
          <font color="#FFFFFF">會員系統 - 登入</font>
        </td>
      </tr>
      <tr>
        <td width="80" align="center" valign="baseline">帳號</td>
        <td valign="baseline"><input type="text" name="txtUserName" id="txtUserName" /></td>
      </tr>
      <tr>
        <td width="80" align="center" valign="baseline">密碼</td>
        <td valign="baseline"><input type="password" name="txtPassword" id="txtPassword" /></td>
      </tr>
      <tr>
        <td colspan="2" align="center" bgcolor="#CCCCCC"><input type="submit" name="btnOK" id="btnOK" value="登入" />
          <input type="reset" name="btnReset" id="btnReset" value="重設" />
          <input type="submit" name="btnHome" id="btnHome" value="回首頁" />
        </td>
      </tr>
    </table>
    <div>
      <?php echo $errorMessage; ?>
    </div>
  </form>
</body>

</html>