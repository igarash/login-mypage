<?php
mb_internal_encoding("utf8");

$temp_pic_name = $_FILES['picture']['tmp_name'];

$original_pic_name = $_FILES['picture']['name'];
$path_filename='./image/'.$original_pic_name;

move_uploaded_file($temp_pic_name,'./image/'.$original_pic_name);

?>

<!DOCTYPE html>
<html lang="ja">

<head>
　<meta charset="UTF-8">
　<title>マイページ登録</title>

　<link rel="stylesheet" type="text/css" href="register_confirm.css">
</head>

<body>

    <header>
         <img src="4eachblog_logo.jpg">
    </header>
    
     <main>
        
            
            <div class="form_contents">
                <h2>会員登録 確認</h2>
                <p class="kotira">こちらの内容で登録しても宜しいでしょうか？</p>
                <p class="kakunin">氏名: <?php echo $_POST['name']; ?></p>
                <p class="kakunin">メール: <?php echo $_POST['mail']; ?></p>
                <p class="kakunin">パスワード: <?php echo $_POST['password']; ?></p>
                <p class="kakunin">プロフィール写真:<?php echo $original_pic_name ?> </p>
                <p class="kakunin">コメント: <?php echo $_POST['comments']; ?></p>
                
                
               <div class="button"> 
                   
                   
                        <form action="register.php">
                            <input type="submit" value="戻って確認する" class="button1" >
                        </form>
               
               
                       <form action="register_insert.php" method="post">
                           <input type="submit" value="登録する" class="button2"  >
                           
                           <input type="hidden" value="<?php echo $_POST['name']; ?>" name="name">
                           <input type="hidden" value="<?php echo $_POST['mail']; ?>" name="mail">
                           <input type="hidden" value="<?php echo $_POST['password']; ?>" name="password">
                           <input type="hidden" value="<?php echo $path_filename ?>" name="picture">
                           <input type="hidden" value="<?php echo $_POST['comments']; ?>" name="comments">
                        </form>      
                   
            </div>    
         
          
            
        
    </main>
    
    <footer>
        © 2018 InterNous.Inc. All rights reserved
    </footer>    
    

</body>

</html>