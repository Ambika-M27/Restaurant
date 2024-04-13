<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Menu</title>
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
        .order-form {
            display: inline-block;
        }
        .order-button {
            padding: 5px 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h2>Menu</h2>
    <form class="order-form" action="order.php" method="post">
        <table>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price ($)</th>
                <th>Action</th>
            </tr>
            <?php
            // Include the PostgreSQL connection file
            include('connection.php');

            // Fetch dishes from the database
            $query = "SELECT * FROM dishes";
            $result = pg_query($conn, $query);

            // Display dishes in table rows
            while ($row = pg_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td><img src='" . $row['image_url'] . "' alt='" . $row['name'] . "' class='dish-image'></td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['description'] . "</td>";
                echo "<td>" . $row['price'] . "</td>";
                echo "<td>";
                echo "<input type='hidden' name='dishId' value='" . $row['id'] . "'>";
                echo "<input type='hidden' name='name' value='" . urlencode($row['name']) . "'>";
                echo "<input type='hidden' name='description' value='" . urlencode($row['description']) . "'>";
                echo "<input type='hidden' name='price' value='" . $row['price'] . "'>";
                echo "<input type='hidden' name='imageUrl' value='" . $row['image_url'] . "'>";
                echo "<input type='hidden' name='customerName' value='" . $_SESSION['customerName'] . "'>";
                echo "<input type='hidden' name='customerEmail' value='" . $_SESSION['customerEmail'] . "'>";
                echo "<button type='submit' class='order-button'>Place Order</button>";
                echo "</td>";
                echo "</tr>";
            }

            // Close the connection
            pg_close($conn);
            ?>
        </table>
    </form>
</body>
</html>
