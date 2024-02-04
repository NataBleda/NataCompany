<?php

?>
<!DOCTYPE html>
<html>
<head>
<title>Only Admin</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
    
  <div class="login-container">
  <h2>Welcome Captain</h2>
    <form id="loginForm">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" placeholder="Enter your username"><br><br>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" placeholder="Enter your password"><br><br>

      <button type="submit">Login</button>
    </form>

    <div class="message"></div>
  </div>

  <script src="script.js"></script>
</body>
</html>
