<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Gloria+Hallelujah&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="form-box">
            <h2>Login</h2>
            <form id="loginForm">
                <div class="input-box">
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="Enter your email">
                </div>
                <div class="input-box">
                    <label for="password">Password</label>
                    <input type="password" id="password" placeholder="Enter your password">
                </div>
                <button type="submit" class="btn">Login</button>
            </form>
            <div class="toggle-box">
                <p id="toggleText">Don't have an account? <a href="signup.php" id="toggleButton" class="link-btn">Sign Up</a ></p>
            </div>
        </div>
        </div>
    </div>
</body>
</html>
