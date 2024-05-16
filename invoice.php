<?php
// Include the FPDF library
require('fpdf/fpdf.php');

// Function to sanitize input
function sanitizeInput($input) {
    return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
}

// Retrieve customer details and order details from URL parameters and sanitize them
$customerName = isset($_GET['customerName']) ? sanitizeInput($_GET['customerName']) : 'N/A';
$customerEmail = isset($_GET['customerEmail']) ? sanitizeInput($_GET['customerEmail']) : 'N/A';
$orderedItems = isset($_GET['orderedItems']) ? sanitizeInput($_GET['orderedItems']) : 'N/A';
$totalAmount = isset($_GET['totalAmount']) ? sanitizeInput($_GET['totalAmount']) : 'N/A';
$currentDateTime = date('Y-m-d H:i:s');

// Create a new PDF instance
$pdf = new FPDF();
$pdf->AddPage();

// Set font for the title
$pdf->SetFont('Arial', 'B', 16);
// Title
$pdf->Cell(0, 10, 'Invoice', 0, 1, 'C');

// Line break
$pdf->Ln(10);

// Set font for the rest of the text
$pdf->SetFont('Arial', '', 12);

// Customer details
$pdf->Cell(0, 10, 'Customer Name: ' . $customerName, 0, 1);
$pdf->Cell(0, 10, 'Customer Email: ' . $customerEmail, 0, 1);
$pdf->Cell(0, 10, 'Ordered Items: ' . $orderedItems, 0, 1);
$pdf->Cell(0, 10, 'Total Amount: $' . $totalAmount, 0, 1);
$pdf->Cell(0, 10, 'Date & Time: ' . $currentDateTime, 0, 1);

// Output PDF as a download
$pdf->Output('D', 'invoice.pdf');
?>
