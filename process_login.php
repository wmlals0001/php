

<?php
    session_start();
    $conn = mysqli_connect("192.168.0.150", "root", "ew3125", "jm_test");
    
    $id = $_POST['account'];
    $pw = $_POST['password'];
    
    $sql = "SELECT * FROM users WHERE account='$id' AND password='$pw'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($result);
    $info = mysqli_fetch_array($result);
    
    if( $row > 0 ){
        $_SESSION['is_login'] = true;
        $_SESSION['id'] = $info['account'];
        $_SESSION['users_id'] = $info['id'];
        Header("Location: index.php");
        
    }else {
        echo "로그인 실패";
    }
?>