<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $customerName = isset($_POST['customerName']) ? $_POST['customerName'] : '';
    $customerEmail = isset($_POST['customerEmail']) ? $_POST['customerEmail'] : '';
    $orderedItems = isset($_POST['orderedItems']) ? $_POST['orderedItems'] : '';
    $totalAmount = isset($_POST['totalAmount']) ? $_POST['totalAmount'] : '';

    // Redirect to invoice page with order details as parameters
    header("Location: invoice.php?customerName=$customerName&customerEmail=$customerEmail&orderedItems=$orderedItems&totalAmount=$totalAmount");
    exit();
}
?>
