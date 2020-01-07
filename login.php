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
<h2>로그인</h2>

<?php
    session_start();
    if(isset($_SESSION['is_login'])){
        header('Location: index.php');
    }
?>

<form action="process_login.php" method="post">
    <p>
        아이디 : <input type="text" name="account" placeholder="아이디">
    </p>
    <p>
        패스워드 : <input type="password" name="password" placeholder="비밀번호">
    </p>
    <p>
        <input type="submit" value="로그인">
    </p>
</form>
</body>
</html>