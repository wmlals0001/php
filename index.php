<?php
    $conn = mysqli_connect("192.168.0.150", "root", "ew3125", "jm_test");
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<?php
	    session_start();
	    if( isset($_SESSION['is_login']) ){
            echo "<h2>환영합니다".$_SESSION['id']."님</h2>";
            echo '<form action="process_logout.php" method="post">
					<input type="submit" value="로그아웃">
			 	  </form>';
	    }
	?>
	<a href="comment.php">게시판 보기</a>
	<a href="comment_write.php">게시판 쓰기</a>
</body>
</html>