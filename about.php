<?php
// home.php (Example PHP backend script)
// This script would handle the request from the "Home" navbar item

// Example response
$response = array(
    'status' => 'success',
    'message' => 'You clicked on the About navbar item.'
);

// Return the response as JSON
header('Content-Type: application/json');
echo json_encode($response);
?>