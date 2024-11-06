<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://fonts.googleapis.com/css2?family=Gloria+Hallelujah&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="form-box">
            <h2>Sign Up</h2>
            <form id="signupForm">
            <div class="input-box" id="nameBox">
                    <label for="name">Name</label>
                    <input type="text" id="name" placeholder="Enter your name">
                </div>
                
                <!-- Phone Number (Visible only in Sign Up) -->
                <div class="input-box" id="phoneBox">
                    <label for="phone">Phone Number</label>
                    <input type="text" id="phone" placeholder="Enter your phone number">
                </div>
                <div class="input-box">
                    <label for="signupEmail">Email</label>
                    <input type="email" id="signupEmail" placeholder="Enter your email">
                </div>
                <div class="input-box">
                    <label for="signupPassword">Password</label>
                    <input type="password" id="signupPassword" placeholder="Create a password">
                </div>
                <button type="submit" class="btn">Sign Up</button>
                <div class="toggle-box">
                    <p id="toggleText">already have an account? <a href="Login.php" id="toggleButton" class="link-btn">Login</a></p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>