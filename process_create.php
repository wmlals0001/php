<?php
    $conn = mysqli_connect("192.168.0.150", "root", "ew3125", "jm_test");
   
    $list = "
        INSERT INTO users(
            account,
            name,
            password,
            created_at,
            updated_at
        )
        VALUES(
            '{$_POST['account']}',
            '{$_POST['name']}',
            '{$_POST['password']}',
            NOW(),
            NOW()
        )
    ";
    $result = mysqli_query($conn, $list);
    if( $result === false ){
        echo "회원가입에 실패하셨습니다.";
    }else {
        echo "회원가입에 성공하셨습니다."." <a href='login.php'>로그인</a>";
    }
?>