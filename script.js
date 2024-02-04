const loginForm = document.getElementById("loginForm");
const message = document.querySelector(".message");

loginForm.addEventListener("submit", (event) => {
  event.preventDefault(); // Prevent default form submission

  const username = document.getElementById("username").value;
  const password = document.getElementById("password").value;

  if (username === "admin" && password === "raja") {
    // Successful login
    window.location.href = "index.php";
  } else {
    // Invalid credentials
    message.textContent = "Invalid username or password.";
  }
});
