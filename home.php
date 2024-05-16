<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our Restaurant</title>
    <style>
        /* CSS for styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            color: #333;
            background-image: url('https://w0.peakpx.com/wallpaper/1019/191/HD-wallpaper-restaurant-and-bar-with-gorgeous-view-city-restaurant-view-bar.jpg'); /* Replace 'restaurant-background.jpg' with your actual image file */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: white; /* Ensure text is visible against the background image */
        }
        .overview,
        .special-offers {
            text-align: center;
            margin-bottom: 40px;
            background-color: rgba(255, 255, 255, 0.8); /* Add a semi-transparent white background to improve readability */
            padding: 20px;
            border-radius: 10px; /* Add rounded corners for the background */
        }
        .button-container {
            text-align: center;
            margin-top: 20px;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Our Restaurant</h1>
        
        <!-- PHP code to fetch restaurant overview -->
        <?php
            // Sample data - replace with actual data fetched from a database or file
            $restaurantName = "Delicious Delights";
            $cuisine = "Italian";
            $ambiance = "Cozy and inviting";
            $overview = "Welcome to $restaurantName! We specialize in exquisite $cuisine cuisine served in a $ambiance ambiance.";
        ?>

        <!-- Display restaurant overview -->
        <div class="overview">
            <p><?php echo $overview; ?></p>
        </div>

        <!-- Special Offers Section -->
        <div class="special-offers">
            <h2>Special Offers</h2>
            <p>Check out our latest specials and promotions:</p>
            <ul>
                <li>10% off on all pasta dishes this weekend!</li>
                <li>Happy Hour: Half-price cocktails from 5 PM to 7 PM every weekday!</li>
            </ul>
        </div>

        <!-- Button container for login and register buttons -->
        <div class="button-container">
            <a href="login.php" class="button">Login</a>
            <a href="register.php" class="button">Register</a>
        </div>
    </div>
</body>
</html>
