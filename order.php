<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Order</title>
    <style>
        /* Add your CSS styles here */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        .dish-image {
            max-width: 100px;
            max-height: 100px;
        }
    </style>
</head>
<body>
    <h2>Your Order</h2>
    <table>
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price ($)</th>
        </tr>
        <tr>
            <td><img src="<?php echo isset($_POST['imageUrl']) ? $_POST['imageUrl'] : ''; ?>" alt="Dish Image" class="dish-image"></td>
            <td><?php echo isset($_POST['name']) ? urldecode($_POST['name']) : 'N/A'; ?></td>
            <td><?php echo isset($_POST['description']) ? urldecode($_POST['description']) : 'N/A'; ?></td>
            <td><?php echo isset($_POST['price']) ? $_POST['price'] : 'N/A'; ?></td>
        </tr>
        <tr>
            <th colspan="4">Customer Details</th>
        </tr>
        <tr>
            <td colspan="2">Name: <?php echo isset($_POST['customerName']) ? $_POST['customerName'] : 'N/A'; ?></td>
            <td colspan="2">Email: <?php echo isset($_POST['customerEmail']) ? $_POST['customerEmail'] : 'N/A'; ?></td>
        </tr>
    </table>
    <!-- Add a hidden input field to include ordered items -->
    <input type="hidden" name="orderedItems" value="<?php echo isset($_POST['orderedItems']) ? $_POST['orderedItems'] : ''; ?>">
    <!-- Add other hidden input fields for total amount, etc. -->
    <form action="order_process.php" method="post">
        <input type="hidden" name="customerName" value="<?php echo isset($_POST['customerName']) ? $_POST['customerName'] : ''; ?>">
        <input type="hidden" name="customerEmail" value="<?php echo isset($_POST['customerEmail']) ? $_POST['customerEmail'] : ''; ?>">
        <button type="submit">Confirm Order</button>
    </form>
    <p>Redirecting to invoice page in 10 seconds...</p>

    <script>
        // Redirect to invoice page after 10 seconds
        setTimeout(function() {
            window.location.href = "invoice.php";
        }, 10000); // 10,000 milliseconds = 10 seconds
    </script>
</body>
</html>
