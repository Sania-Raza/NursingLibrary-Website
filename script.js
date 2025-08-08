document.getElementById("signupForm").addEventListener("submit", function (e) {
    e.preventDefault();
    alert("Account Created Successfully!");
  });
  // Existing log-in alert (if any)
document.getElementById("signupForm").addEventListener("submit", function (e) {
    e.preventDefault();
    alert("Log in Successfully!");
  });

  // NEW: Clear form on 'Create New Account' button click
  document.querySelector(".new-account-btn").addEventListener("click", function () {
    // Get the form element
    const form = document.getElementById("signupForm");
  
    // Clear all input fields
    form.reset();
  
    // Optional: Alert or message
    alert("Form cleared. Please enter new account details.");
  });
  // Clear password field when "Forget Password ?" is clicked
document.querySelector(".forgot-password").addEventListener("click", function () {
  // Select the password input field
  const passwordField = document.querySelector('input[type="password"]');

  // Clear the password field
  passwordField.value = "";
});