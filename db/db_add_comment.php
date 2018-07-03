<?php
require_once ("db_connect.php");
$commentId = isset($_POST['comment_id']) ? $_POST['comment_id'] : "";
$commentSenderEmail = isset($_POST['email']) ? $_POST['email'] : "";
$commentSenderName = isset($_POST['name']) ? $_POST['name'] : "";
$commentSenderMessage = isset($_POST['message']) ? $_POST['message'] : "";
$date = date('d-m-Y');

$sql = "INSERT INTO comments(parent_id,date,email,name,message) VALUES ('" . $commentId . "','" . $date. "','" . $commentSenderEmail . "','" . $commentSenderName . "' ,'" . $commentSenderMessage . "')";

$result = mysqli_query($connect, $sql);

if (! $result) {
    $result = mysqli_error($connect);
}
echo $result;
?>
