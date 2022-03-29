<?php
mb_internal_encoding("utf8");

session_start();

if(empty($_POST['form_mypage'])){
  header("Location:login_error.php");
}

?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>マイページ登録</title>
    <link rel="stylesheet" type="text/css" href="mypage.css">
  </head>

  <body>
    <header>
      <img src="4eachblog_logo.jpg">
      <div class="log_out"><a href="log_out.php">ログアウト</a></div>
    </header>
    
    <main>
      <div class="confirm">
        <h2>会員情報</h2>
        <div class="hello">
          <?php echo "こんにちは！　".$_SESSION["name"]."さん"?>
        </div>
        <div class="profile_pic">
          <img src="<?php echo $_SESSION['picture'];?>">
        </div>
        <form action="mypage_update.php" method="post">
          <div class="basic_info">
            <p> 氏名：<input type="text" value="<?php echo $_SESSION['name'];?>" name="name"></p>
            <p> メール：<input type="text" value="<?php echo $_SESSION['mail'];?>" name="mail"></p>
            <p> パスワード：<input type="text" value="<?php echo $_SESSION['password'];?>" name="password"></p>
          </div>
          <div class="comments">
            <textarea cols="85" rows="5" name="comments"><?php echo $_SESSION['comments'];?></textarea>
          </div>
          <div class="form_center">
            <input type="submit" class="submit_button" size="35" value="この内容に変更する">
          </div>
        </form>
      </div>
    </main>
    <footer>
      ©2018 InterNous.inc.All rights reserved
    </footer>
  </body>
</html>