<?php
require_once '../models/Calls.php'; // Adjust path if needed

header("Content-Type: application/json");

// Disable error messages in JSON response
error_reporting(0);
ini_set('display_errors', 0);

$callsModel = new App\Models\Calls();
$callData = $callsModel->getCallsFromFinesse();

// Ensure JSON encoding is successful
$response = ["data" => $callData];

echo json_encode($response);
exit; // Ensure nothing else is outputted
?>
