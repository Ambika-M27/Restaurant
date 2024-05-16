<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        /* CSS for styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('https://t4.ftcdn.net/jpg/02/44/69/87/360_F_244698725_uWdUNY1oiaHthwcb1NK6IqtPuRNKHor2.jpg'); /* Add your background image here */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        form {
            background-color: rgba(255, 255, 255, 0.9);
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
        input[type="password"],
        input[type="email"] {
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
            text-decoration: none;
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
    <form action="register_process.php" method="post">
        <h2>Register</h2>
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br>
        <label for="confirm_password">Confirm Password:</label><br>
        <input type="password" id="confirm_password" name="confirm_password" required><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>
        <label for="phone">Phone Number:</label><br>
        <input type="text" id="phone" name="phone" required><br>
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br>
        <div class="button-container">
            <button type="submit">Register</button>
            <a href="home.php" class="back-button">Back</a>
        </div>
    </form>
</body>
</html>
