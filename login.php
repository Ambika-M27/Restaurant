<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        /* CSS for styling */
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://rare-gallery.com/uploads/posts/913132-food-vegetables-tomatoes-salad-Pepper-Garlic-Paprika.jpg'); /* Add your background image here */
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        form {
            background-color: rgba(255, 255, 255, 0.8); /* Add a semi-transparent white background */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        input[type="password"] {
            width: calc(100% - 10px);
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .button-container {
            display: flex;
            justify-content: space-between;
            margin-top: 10px; /* Add margin between the buttons and the form */
        }
        button, .back-button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 45%; /* Adjust width for spacing */
            text-align: center;
            text-decoration: none; /* Remove default underline for links */
        }
        .back-button {
            margin-left: 10px; /* Add some margin between buttons */
        }
        button:hover, .back-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form action="login_process.php" method="post">
        <h2>Login</h2>
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br>
        <div class="button-container">
            <button type="submit">Login</button>
            <a href="home.php" class="back-button">Back</a>
        </div>
    </form>
</body>
</html>
