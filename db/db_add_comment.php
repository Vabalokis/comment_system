<?php
require_once ("db_connect.php");
$commentId = isset($_POST['parent_id']) ? mysqli_real_escape_string($connect,$_POST['parent_id']) : "" ;
$commentSenderEmail = isset($_POST['email']) ? mysqli_real_escape_string($connect,$_POST['email']) : "" ;
$commentSenderName = isset($_POST['name']) ? mysqli_real_escape_string($connect,$_POST['name']) : "" ;
$commentSenderMessage = isset($_POST['message']) ? mysqli_real_escape_string($connect,$_POST['message']) : "" ;
$date = date('d-m-Y');

$sql = "INSERT INTO comments(parent_id,date,email,name,message) VALUES ('$commentId' , '$date' , '$commentSenderEmail' , '$commentSenderName' , '$commentSenderMessage' )";

$result = mysqli_query($connect, $sql);

if (! $result) {
    $result = mysqli_error($connect);
}
echo $result;
?>
