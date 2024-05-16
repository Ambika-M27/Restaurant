<?php
// Start the session
session_start();

// Check if customerName and customerEmail session variables are set
$customerName = isset($_SESSION['customerName']) ? $_SESSION['customerName'] : "";
$customerEmail = isset($_SESSION['customerEmail']) ? $_SESSION['customerEmail'] : "";

// Include the PostgreSQL connection file
include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Menu</title>
    <style>
        /* CSS for styling */
        h2 {
            text-align: center; /* Align text in the middle */
            color: #007bff; /* Set text color to blue */
            font-size: 45px; /* Set font size */
            margin-top: 20px; /* Add some top margin */
            margin-bottom: 30px; /* Add some bottom margin */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); /* Add text shadow for effect */
            transition: color 0.3s; /* Add transition effect for color change */
            position: relative; /* Add position relative */
        }
        h2:hover {
            color: #0056b3; /* Change text color on hover */
        }

        /* Style for back button */
        .back-button {
            position: absolute; /* Position absolutely */
            top: 5px; /* Adjust top position */
            left: 10px; /* Adjust left position */
            background-color: #007bff;
            color: #fff;
            border: none;
            font-size: 30px;
            border-radius: 5px;
            padding: 2px 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            text-decoration: none; /* Remove default underline for links */
        }
        .back-button:hover {
            background-color: #0056b3;
        }

        /* Other styles */
        .menu-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 20px;
        }
        .dish-card {
            width: 300px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .dish-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .dish-details {
            padding: 20px;
        }
        .dish-name {
            font-size: 20px;
            margin-bottom: 10px;
        }
        .dish-description {
            margin-bottom: 10px;
        }
        .dish-price {
            font-weight: bold;
            color: #007bff;
        }
        .order-button {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .order-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h2>
        <a href="home.php" class="back-button">Back</a>
        MENU ITEMS
    </h2>
    <div class="menu-container">
        <?php
        // Fetch dishes from the database
        $query = "SELECT * FROM dishes";
        $result = pg_query($conn, $query);

        // Display dishes in cards
        while ($row = pg_fetch_assoc($result)) {
            echo "<div class='dish-card'>";
            echo "<img src='" . $row['image_url'] . "' alt='" . $row['name'] . "'>";
            echo "<div class='dish-details'>";
            echo "<div class='dish-name'>" . $row['name'] . "</div>";
            echo "<div class='dish-description'>" . $row['description'] . "</div>";
            echo "<div class='dish-price'>Rs.:" . $row['price'] . "</div>";
            echo "<form class='order-form' action='order.php' method='post'>";
            echo "<input type='hidden' name='dishId' value='" . $row['id'] . "'>";
            echo "<input type='hidden' name='name' value='" . urlencode($row['name']) . "'>";
            echo "<input type='hidden' name='description' value='" . urlencode($row['description']) . "'>";
            echo "<input type='hidden' name='price' value='" . $row['price'] . "'>";
            echo "<input type='hidden' name='imageUrl' value='" . $row['image_url'] . "'>";
            echo "<input type='hidden' name='customerName' value='" . $customerName . "'>";
            echo "<input type='hidden' name='customerEmail' value='" . $customerEmail . "'>";
            echo "<button type='submit' class='order-button'>Place Order</button>";
            echo "</form>";
            echo "</div>";
            echo "</div>";
        }

        // Close the connection
        pg_close($conn);
        ?>
    </div>
</body>
</html>