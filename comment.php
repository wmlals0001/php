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
	<h2>댓글보기</h2>
	<table border="1">
		<tr>
			<th>No</th>
			<th>이름[account]</th>
			<th>내용</th>
			<th>날짜</th>
		</tr>
	    <?  $comment_table = "SELECT users.id, comment.users_id, users.account, comment.comment, comment.created_at as comment_created_at, users.created_at as user_created_at FROM comment join users on users.id = comment.users_id ORDER BY comment_created_at DESC";
        $comment_result = mysqli_query($conn, $comment_table);
        $i = 0;
        while ($i <= $row = mysqli_fetch_array($comment_result)){ $i++; ?>
			<tr>
				<td>
                    <?= $i; ?>
				</td>
				<td>
                    <?= $row['account']?>
				</td>
				<td>
                    <?= $row['comment']?>
				</td>
				<td>
                    <?= $row['comment_created_at']?>
				</td>
			</tr>
        <? } ?>
	</table>
	<a href="index.php">메인으로</a>
	</body>
</html>