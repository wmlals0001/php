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
    <h2>회원가입</h2>
    <form action="process_create.php" method="post">
        <p>
            아이디 : <input type="text" name="account" placeholder="아이디">
        </p>
        <p>
            이름 : <input type="text" name="name" placeholder="이름">
        </p>
        <p>
            패스워드 : <input type="password" name="password" placeholder="비밀번호">
        </p>
        <p>
            <input type="submit">
        </p>
    </form>
</body>
</html>