<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TrendTailor</title>
    <link rel="stylesheet" href="style2.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&family=Poppins:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>

    <div class="header">
        <nav>
            <ul>
                <li class="shop"><a href="#">Shop</a></li>
                <li class="sale"><a href="#">Sale</a></li>
                <li class="about"><a href="#">About</a></li>
                <li class="help"><button id="signInBtn">Sign In</button></li>
                <li class="line"></li>
            </ul>
        </nav>
        <div class="title">
            <h1>TrendTailor</h1>
        </div>
        <div class="shopping-bag">
            <img src="shopping_bag_icon_153998 - Copy.png" alt="Shopping Bag Icon">
        </div>
        <div class="flag">
            <img src="Flag_of_the_Philippines.svg - Copy.png" alt="Flag Icon">
        </div>
    </div>

    <main>
        <div class="title h2" style="left: 0px; top: 120px;">
            <h2>Design your perfect garment with</h2>
        </div>
        <div class="title h3" style="left: 0px; top: 200px;">
            <h3>TrendTailor.</h3>
        </div>
    </main>

    <!-- Sign-Up Modal with role selection -->
    <div id="signupModal" class="modal">
        <div class="modal-content">
            <span class="close" id="closeSignup">&times;</span>
            <form action="signup.php" method="post">
                <label for="fName">First Name</label>
                <input type="text" id="fName" name="fName" placeholder="Enter your first name" required>

                <label for="lName">Last Name</label>
                <input type="text" id="lName" name="lName" placeholder="Enter your last name" required>

                <label for="newEmail">Email</label>
                <input type="email" id="newEmail" name="email" placeholder="Enter your email" required>

                <!-- Dropdown for selecting role -->
                <label for="roleDropdown">Select Role</label>
                <select id="roleDropdown" name="role" required>
                    <option value="">--Select Role--</option>
                    <option value="designer">Designer</option>
                    <option value="client">Client</option>
                </select>

                <label for="newPassword">Password</label> 
                <div class="password-container">
                    <input type="password" id="newPassword" name="password" placeholder="Create a password" required>
                    <span onclick="toggleNewPassword()" class="toggle-password1">👁</span>
                </div>
                <p id="passwordErrorMsg" class="error-msg"></p> <!-- Error message for password validation -->

                <label for="confirmPassword">Confirm Password</label>
                <div class="password-container">
                    <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm your password" required>
                    <span onclick="toggleConfirmPassword()" class="toggle-password2">👁</span>
                </div>

                <button id="signupSubmit" class="submit-btn">Sign Up</button>
                <p class="login-text">Already have an account? <a href="#" id="backToLogin">Sign In.</a></p>
            </form>
        </div>
    </div>

    <!-- Login Modal -->
    <div id="loginModal" class="modal">
        <div class="modal-content">
        <div class="title h4">
            <h4>Login Now!</h4>
        </div>
            <form id="loginForm" action="login.php" method="post" onsubmit="return validateLoginForm();">

            <div id="errorMsg" style="color: red; display: none;"></div> <!-- Error message -->


            <span class="close" id="closeLogin">&times;</span>
            <form action="login.php" method="post">

                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>

                <label for="password">Password</label>
                <div class="password-container">
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                    <span onclick="togglePassword()" class="toggle-password">👁</span>
                </div>
                
                <div class="forgot-password">
                    <span>Forgot Password?</span> <a href="#" id="openResetPassword">Get Help.</a> 
                </div>
                <button id="submit" class="submit-btn">Sign In</button>
                <p class="signup-text">Don't have an account? <a href="#" id="openSignup">Sign Up.</a></p>
            </form>
        </div>
    </div>

    <!-- Reset Password Modal -->
    <div id="resetPasswordModal" class="modal">
        <div class="modal-content">
            <span class="close" id="closeResetPassword">&times;</span>
            <form action="/reset-password" method="post">
                <label for="resetEmail">Email</label>
                <input type="email" id="resetEmail" name="resetEmail" placeholder="Enter your email" required>
                <button id="resetSubmit" class="submit-btn">Send Verification Code</button>
            </form>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
