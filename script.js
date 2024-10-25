// Get the modal elements
var loginModal = document.getElementById("loginModal");
var signupModal = document.getElementById("signupModal");
var resetPasswordModal = document.getElementById("resetPasswordModal");

// Get the buttons that open the modals
var signInBtn = document.getElementById("signInBtn");
var openSignupBtn = document.getElementById("openSignup");
var openResetPasswordBtn = document.getElementById("openResetPassword");

// Get the <span> elements that close the modals
var closeLogin = document.getElementById("closeLogin");
var closeSignup = document.getElementById("closeSignup");
var closeResetPassword = document.getElementById("closeResetPassword");

// Open login modal when "Sign In" is clicked 
signInBtn.onclick = function() {
    loginModal.style.display = "block";
}

// Open sign-up modal
openSignupBtn.onclick = function() {
    loginModal.style.display = "none"; // Close login modal
    signupModal.style.display = "block"; // Open sign-up modal
}

// Open reset password modal
openResetPasswordBtn.onclick = function() {
    loginModal.style.display = "none"; // Close login modal
    resetPasswordModal.style.display = "block"; // Open reset password modal
}

// Close login modal
closeLogin.onclick = function() {
    loginModal.style.display = "none";
}

// Close sign-up modal
closeSignup.onclick = function() {
    signupModal.style.display = "none";
}

// Close reset password modal
closeResetPassword.onclick = function() {
    resetPasswordModal.style.display = "none";
}

// Add this function to prevent closing the modal when clicking outside
window.onclick = function(event) {
    // Do nothing, preventing modal from closing on outside click
};

// Toggle password visibility for login, signup, and confirm password
function togglePassword() {
    var passwordInput = document.getElementById("password");
    passwordInput.type = passwordInput.type === "password" ? "text" : "password";
}

function toggleNewPassword() {
    var newPasswordInput = document.getElementById("newPassword");
    newPasswordInput.type = newPasswordInput.type === "password" ? "text" : "password";
}

function toggleConfirmPassword() {
    var confirmPasswordInput = document.getElementById("confirmPassword");
    confirmPasswordInput.type = confirmPasswordInput.type === "password" ? "text" : "password";
}

// Validation for login form
function validateLoginForm() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var errorMsg = document.getElementById("errorMsg");
    
    // Clear any existing error message
    errorMsg.style.display = "none";
    errorMsg.innerText = "";

    // Basic validation (you can expand this as needed)
    if (!email || !password) {
        errorMsg.innerText = "Email and password cannot be empty.";
        errorMsg.style.display = "block";
        return false; // Prevent form submission
    }

    // Perform further checks here (e.g., regex for email format)
    // Example: Basic regex for email format
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        errorMsg.innerText = "Please enter a valid email.";
        errorMsg.style.display = "block";
        return false; // Prevent form submission
    }

    // Simulate an API call to check if user exists (this part would normally go to the server)
    // You can replace this with actual AJAX request to the server
    var users = ["test@example.com"]; // Example existing users
    if (!users.includes(email)) {
        errorMsg.innerText = "User does not exist.";
        errorMsg.style.display = "block";
        return false; // Prevent form submission
    }

    // If everything is fine, you can proceed to submit the form
    return true; // Allow form submission
}
