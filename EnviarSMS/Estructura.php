<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Required if your environment does not handle autoloading
    require 'twilio-php-main/src/Twilio/autoload.php';

    // Your Account SID and Auth Token from console.twilio.com
    $sid = "AC7dfafe5daf2e4dec71e254c338360a7b";
    $token = "112896adcea77c747e001c63cbf2a349";

    // Set the verify option to false to skip phone number verification
    $client = new Twilio\Rest\Client($sid, $token, null, null, null, null, null, false);

    // Capture phone number and message from the form
    $phoneNumber = $_POST['number'];
    $message = $_POST['message'];

    // Use the Client to send the message
    $client->messages->create(
        $phoneNumber,
        [
            'from' => '+12564826699',
            'body' => $message
        ]
    );
}
?>