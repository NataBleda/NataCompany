<?php
session_start();

// Database connection details
$host = "127.0.0.1";
$username = "root";
$password = "";
$database = "natableda";

// Create database connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Function to validate and insert user data into the database without hashing
function registerUserWithoutHash($conn, $name, $email, $age, $password) {
    $sql = "INSERT INTO users (name, email, age, password_hash) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("Error in prepare: " . $conn->error);
    }

    $stmt->bind_param("ssis", $name, $email, $age, $password);

    if ($stmt->execute()) {
        return true;
    } else {
        $error_message = "Error in execution: " . $stmt->error;
        // You can log or handle the error message here
        return false;  // Return false after handling the error
    }
}

// Function to check user credentials and start a session
function loginUser($conn, $email, $password) {
    $sql = "SELECT id, name, email, age, password_hash FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password_hash'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            $_SESSION['user_email'] = $user['email'];
            $_SESSION['user_age'] = $user['age'];
            return true;
        }
    }

    return false;
}

// Function to log out and destroy the session
function logoutUser() {
    session_unset();
    session_destroy();
}

// Check if the registration form is submitted
if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $password = $_POST['password'];

    // Validate and insert user data
    if (registerUserWithoutHash($conn, $name, $email, $age, $password)) {
        echo "Registration successful!";
        header("Location: natacompany20.php");
        exit();
    } else {
        echo "Registration failed!";
    }
}

// Check if the login form is submitted
if (isset($_POST['login'])) {
    $email = $_POST['login_email'];
    $password = $_POST['login_password'];

    // Check user credentials and start a session
    if (loginUser($conn, $email, $password)) {
        echo "Login successful! Welcome, " . $_SESSION['user_name'];
    } else {
        echo "Login failed! Invalid email or password.";
    }
}

// Check if the logout button is clicked
if (isset($_GET['logout'])) {
    // Log out the user
    logoutUser();
    echo "Logout successful!";
}

$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="shortcut icon" href="logo mehdi.ico">
    <style>
        body {
            background: linear-gradient(135deg, #000000, #0000FF);
            font-family: Arial, sans-serif;
            color: #FFFFFF;
            margin: 0;
            padding: 20px;
        }

        h2 {
            margin-top: 0;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: none;
        }

        .avatar {
            display: block;
            border-radius: 50%;
            width: 200px;
            height: 200px;
            margin: 20px auto;
        }

        .register-button {
            display: block;
            background-color: #FF0000;
            color: #FFFFFF;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }

        .register-button:hover {
            background-color: #FF4500;
        }
    </style>
</head>
<body>
    <h2>S'INSCRIRE</h2>
    <img src="neutre.png" alt="Avatar" class="avatar" id="avatar">
    <form method="post" action="">
        <div class="form-group">
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" onchange="changeAvatar()">
                <option value="neutre">Ne pas mentionné</option>
                <option value="female">Femme</option>
                <option value="male">Homme</option>
            </select>
        </div>

        <div class="form-group">
            <label for="avatar-upload">Upload Picture:</label>
            <input type="file" class="form-control-file" id="avatar-upload" name="avatar-upload" accept="image/*"
                onchange="displayAvatarPreview(this)">
        </div>

        <div class="form-group">
            <label for="name">Nom&Prenom:</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="age">Age(+16ans):</label>
            <input type="number" id="age" name="age" required min="16">
        </div>

        <div class="form-group">
            <label for="password">Mot de passe:</label>
            <div class="password-wrapper">
                <input type="password" class="form-control" id="password" name="password"
                    placeholder="Mot de passe" required
                    pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$"
                    title="Le mot de passe doit contenir au moins 8 caractères, dont au moins une lettre et un chiffre." />
                <input type="checkbox" id="show-password" />
            </div>
        </div>

        <div class="form-group">
            <label for="confirm-password">Confirmez votre mot de passe:</label>
            <div class="password-wrapper">
                <input type="password" class="form-control" id="confirm-password" name="confirm-password"
                    placeholder="Confirmez votre mot de passe" required
                    pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$"
                    title="Le mot de passe doit contenir au moins 8 caractères, dont au moins une lettre et un chiffre." />
                <input type="checkbox" id="show-confirm-password" />
            </div>
        </div>

        <button type="submit" class="register-button" name="register">Enregistrer</button>
    </form>
  <script>
    function changeAvatar() {
      var genderSelect = document.getElementById("gender");
      var avatarImg = document.getElementById("avatar");

      if (genderSelect.value === "female") {
        avatarImg.src = "woman.png";
      } else if (genderSelect.value === "male") {
        avatarImg.src = "man.png";
      }
      else if (genderSelect.value === "neutre") {
        avatarImg.src = "neutre.png";
      }
    }

    function displayAvatarPreview(input) {
      var avatarImg = document.getElementById("avatar");

      // Remove existing avatar image
      avatarImg.src = "neutre.png";

      if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
          avatarImg.src = e.target.result;
        };

        reader.readAsDataURL(input.files[0]);
      }
    }

    function submitForm(event) {
      event.preventDefault();
      
      var nameInput = document.getElementById("name");
      var emailInput = document.getElementById("email");
      var ageInput = document.getElementById("age");
      var passwordInput = document.getElementById("password");
      var confirmPasswordInput = document.getElementById("confirm-password");

      if (
        nameInput.value === "" ||
        emailInput.value === "" ||
        ageInput.value === "" ||
        passwordInput.value === "" ||
        confirmPasswordInput.value === ""
      ) {
        alert("Veuillez remplir tous les champs.");
        return false;
      }

      var gifImg = document.createElement("img");
      gifImg.src = "welcome-to-the-team.gif";
      gifImg.alt = "Welcome to the team";
      gifImg.classList.add("avatar");

      var form = document.querySelector("form");
      form.style.display = "none";

      var avatarImg = document.getElementById("avatar");
      avatarImg.parentNode.insertBefore(gifImg, avatarImg.nextSibling);

      setTimeout(function () {
        window.location.href = "nata_company.php";
      }, 4000);

      return false;
    }  const passwordField = document.getElementById('password');
const confirmPasswordField = document.getElementById('confirm-password');
const showPasswordCheckbox = document.getElementById('show-password');
const showConfirmPasswordCheckbox = document.getElementById('show-confirm-password');

function validatePassword() {
  if (passwordField.value !== confirmPasswordField.value) {
    confirmPasswordField.setCustomValidity("Les mots de passe ne correspondent pas.");
  } else {
    confirmPasswordField.setCustomValidity("");
  }
}

function togglePasswordVisibility() {
  const passwordType = showPasswordCheckbox.checked ? 'text' : 'password';
  passwordField.setAttribute('type', passwordType);
}

function toggleConfirmPasswordVisibility() {
  const confirmPasswordType = showConfirmPasswordCheckbox.checked ? 'text' : 'password';
  confirmPasswordField.setAttribute('type', confirmPasswordType);
}

showPasswordCheckbox.addEventListener('change', togglePasswordVisibility);
showConfirmPasswordCheckbox.addEventListener('change', toggleConfirmPasswordVisibility);
passwordField.addEventListener('input', validatePassword);
confirmPasswordField.addEventListener('input', validatePassword);

  </script>
</body>
</html>
