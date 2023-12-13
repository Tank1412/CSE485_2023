<?php

include_once("db_connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["comment"])) {
    $comment = $_POST["comment"];

    $sql = "INSERT INTO comments (comment) VALUES ('$comment')";

    if ($conn->query($sql) === TRUE) {
        $commentId = $conn->insert_id;
        $response = "<p>Bình luận mới (#$commentId): $comment</p>";
        echo $response;
        getCommentReply($conn, $commentId); 
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }
}

function getCommentReply($conn, $parentId) {
    $replyQuery = "SELECT id, parent_id, comment, sender, date FROM comments WHERE parent_id = '$parentId' ORDER BY id DESC";
    $replyResult = mysqli_query($conn, $replyQuery) or die("database error:". mysqli_error($conn));
    $replyHTML = '';
    while($reply = mysqli_fetch_assoc($replyResult)){
        $replyHTML .= '
            <div class="panel panel-primary">
            <div class="panel-heading">By <b>'.$reply["sender"].'</b> on <i>'.$reply["date"].'</i></div>
            <div class="panel-body">'.$reply["comment"].'</div>
            <div class="panel-footer" align="right"><button type="button" class="btn btn-primary reply" id="'.$reply["id"].'">Reply</button></div>
            </div> ';
        $replyHTML .= getCommentReply($conn, $reply["id"]);
    }
    echo $replyHTML;

    if ($replyResult == false) {
        echo "Lỗi truy vấn: " . mysqli_error($conn);
    }

    $sql = "SELECT sender, comment FROM comments";
    $result = $conn->query($sql);

    // Kiểm tra và hiển thị dữ liệu
    if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<p><strong>Sender:</strong> " . $row["sender"] . "</p>";
        echo "<p><strong>Comment:</strong> " . $row["comment"] . "</p>";
        echo "<hr>";
    }
    } else {
        echo "No comments found.";
    }
    $conn->close();
}

// $commentQuery = "SELECT id, parent_id, comment, sender, date FROM comments WHERE parent_id = '0' ORDER BY id DESC";
// $commentsResult = mysqli_query($conn, $commentQuery) or die("database error:". mysqli_error($conn));
// $commentHTML = '';
// while($comment = mysqli_fetch_assoc($commentsResult)){
// 	$commentHTML .= '
// 		<div class="panel panel-primary">
// 		<div class="panel-heading">By <b>'.$comment["sender"].'</b> on <i>'.$comment["date"].'</i></div>
// 		<div class="panel-body">'.$comment["comment"].'</div>
// 		<div class="panel-footer" align="right"><button type="button" class="btn btn-primary reply" id="'.$comment["id"].'">Reply</button></div>
// 		</div> ';
// 	$commentHTML .= getCommentReply($conn, $comment["id"]);
// }
// echo $commentHTML;
?>