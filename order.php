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
        .button-container {
            margin-top: 20px;
        }
        .button-container form button {
            padding: 10px 20px;
            font-size: 16px;
            margin-right: 10px;
            cursor: pointer;
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            border-radius: 5px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            transition-duration: 0.4s;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        }

        .button-container form button:hover {
            background-color: #45a049; /* Darker Green */
        }

        .button-container form button[type="submit"] {
            background-color: #008CBA; /* Blue */
        }

        .button-container form button[type="submit"]:hover {
            background-color: #007BAA; /* Darker Blue */
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
    <div class="button-container">
        <form action="order_process.php" method="post" style="display: inline;">
            <input type="hidden" name="customerName" value="<?php echo isset($_POST['customerName']) ? $_POST['customerName'] : ''; ?>">
            <input type="hidden" name="customerEmail" value="<?php echo isset($_POST['customerEmail']) ? $_POST['customerEmail'] : ''; ?>">
            <button type="submit">Confirm Order</button>
        </form>
        <form action="menu.php" method="get" style="display: inline;">
            <button type="submit">Back to Menu</button>
        </form>
    </div>
</body>
</html>
