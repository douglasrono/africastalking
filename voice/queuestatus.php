<?php
require 'vendor/autoload.php';
use AfricasTalking\SDK\AfricasTalking;

// Set your app credentials
$username = "MyAppUsername";
$apikey   = "MyAppAPIKey";

// Initialize the SDK
$AT       = new AfricasTalking($username, $apiKey);

// Get the voice service
$voice    = $AT->voice();

// Set your Africa's Talking phone number in international format
$phoneNumber = "+254711082XXX";

try {
    // Fetch the queue
    $results = $voice->fetchQueuedCalls([
        "phoneNumber" => $phoneNumber
    ]);

    print_r($results);
} catch (Exception $e) {
    echo "Error: ".$e->getMessage();
}
