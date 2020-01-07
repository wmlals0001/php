<?php
    session_start();
    $conn = mysqli_connect("192.168.0.150", "root", "ew3125", "jm_test");
    
    $comment = "
        INSERT INTO comment(
            comment,
            users_id,
            created_at,
            updated_at
        )
        VALUES(
            '{$_POST['comment']}',
            '{$_SESSION['users_id']}',
            NOW(),
            NOW()
        )
    ";
    $result = mysqli_query($conn, $comment);
    Header("Location: comment.php");
?>