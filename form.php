<?php

$typeSubscribe = $_GET['subscribe'];
$subscribeName = $_GET['subscribe-name'];
$subscribeEmail = $_GET['subscribe-email'];
$subscribeMessage = $_GET['subscribe-message'];

$typeFeedback = $_GET['feedback'];
$feedbackName = $_GET['feedback-name'];
$feedbackEmail = $_GET['feedback-email'];
$feedbackPhone = $_GET['feedback-phone'];


if ($typeSubscribe) {

	$message = ' <strong>name = </strong><i>'. $subscribeName . '</i> email = ' . $subscribeEmail .' message='. $subscribeMessage . '';

}
if ($typeFeedback) {

	$message = ' <strong>name = </strong><i>'. $feedbackName . '</i> email = ' . $feedbackEmail .' message='. $feedbackPhone . '';

	var_dump($typeFeedback);

}


$apiToken = "749032733:AAEsRKj-SVZlcR6ME5u4o45u1MA1N7cLqo4";

$data = [
    "chat_id" => "496446143",
    "text" => $message,
    "parse_mode" => "HTML",  

];

$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data));


