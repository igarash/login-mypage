<?php
mb_internal_encoding("utf8");

session_start();


$a = $_POST['form_mypage'];
if(empty($a)){
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
		<div class="logout"><a href="log_out.php">ログアウト</a></div>
	</header>	
	
	<main>

       <form class="form_contents" action="mypage_update.php" method="post">
           
           <h2>会員情報</h2>
           
           <p class="konitiha">
			   <?php echo "こんにちは!" .$_SESSION['name']."さん"; ?>
		   </p>
           <img src="<?php echo $_SESSION['picture']; ?>" class="ziko">
		   
		   <ul>
			   <li>氏名:<input type="text" value="<?php echo $_SESSION['name'];?>" name="name"></li>
			   <li>メール:<input type="text" value="<?php echo $_SESSION['mail'];?>" name="mail"></li>
			   <li>パスワード:<input type="text" value="<?php echo $_SESSION['password'];?>" name="password"></li>
			   
		   </ul>   
           
		   <p class="comment"><textarea rows="4" cols="60"  name="comments"></textarea>
			   
			   
			   
		   
		   </p>
			   					
		   

		   <div class="formbutton">
		   
				

					<input type="submit" value="この内容に変更する" class="button1" >

			   
		   </div>
	   
		</form>

	</main>
	
	 <footer>
        © 2018 InterNous.Inc. All rights reserved
    </footer> 
</body>

</html>       