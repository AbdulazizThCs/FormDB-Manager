// ====== Get Page Elements ======
const showLoginButton = document.getElementById('show-login');
const welcomeBox = document.getElementById('welcome-box');
const loginBox = document.getElementById('login-box');
const myForm = document.getElementById('myForm');

// ====== Toggle Welcome Curtain Animation ======
showLoginButton.addEventListener('click', function() {
  if (!welcomeBox.classList.contains('slide-left')) {
    // Open curtain
    welcomeBox.classList.add('slide-left');
    loginBox.classList.add('show');
    this.textContent = 'Back';
  } else {
    // Close curtain
    welcomeBox.classList.remove('slide-left');
    loginBox.classList.remove('show');
    this.textContent = 'Continue';
  }
});

// ====== Handle Form Submission ======
myForm.addEventListener('submit', function(e) {
  // Get form data values
  const name = document.getElementById('name').value;
  const age = document.getElementById('age').value;

  // Log data to console (for debug)
  console.log('Form submitted:', { name, age });

  // Allow form to continue submitting normally (no preventDefault here)
});

// ====== Add Smooth Hover Effects to Social Icons ======
document.querySelectorAll('.social-icons a').forEach(icon => {
  icon.addEventListener('mouseenter', function() {
    this.style.transform = 'scale(1.1)';
  });

  icon.addEventListener('mouseleave', function() {
    this.style.transform = 'scale(1)';
  });
});

// ====== Optional: Add Click Handlers for Social Icons ======
document.querySelectorAll('.social-icons a').forEach(icon => {
  icon.addEventListener('click', function(e) {
    e.preventDefault(); // Disable actual link action

    // Get platform name from icon class
    const platform = this.querySelector('i').className.split('-')[1];
    console.log(`${platform} login clicked`);

    // Here you can implement actual social login logic
  });
});
