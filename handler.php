<?php
if (isset($_POST["user"])) {
    $user = $_POST["user"];
} else {
    $user = "Undefined";
}
if (isset($_POST["message"])) {
    $message = $_POST["message"];
} else {
    $message = "Error";
}
$time = date("h:i:s");
if(isset($_COOKIE["messageList"])) {
$oldMessage = $_COOKIE["messageList"];
$newMessage = $time . " - " . $user . ": " . $message . PHP_EOL;
$messageList = $oldMessage . $newMessage;
} elseif(!isset($_COOKIE["messageList"])) {
    $messageList = $time . " - " . $user . ": " . $message . PHP_EOL;
}

setcookie("messageList", $messageList);
header("location:chat.php");