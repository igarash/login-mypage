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

       <div class="form_contents">
           
           <h2>会員情報</h2>
           
           <p class="konitiha">こんにちは!　さん</p>
           <img src="./image/生命パーク雪.jpg" class="ziko">
		   
		   <ul>
			   <li>氏名:</li>
			   <li>メール:</li>
			   <li>パスワード:</li>
			   
		   </ul>   
           
		   <p class="comment">コメントです</p>
		   
		   <div class="formbutton">
		   
				<form action="mypage_hensyu.php">

					<input type="submit" value="編集する" class="button" >

			   </form>
			   
		   </div>
       </div>
		
	</main>	


</body>

</html>