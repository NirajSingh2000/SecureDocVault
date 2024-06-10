<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Forgot Password</title>
</head>
<body>
  <h2>Forgot Password</h2>
  <p>Please enter your email or username below to reset your password:</p>
  <form action="forgot_process.php" method="post">
    <label for="email_username">Email or Username:</label><br>
    <input type="text" id="email_username" name="email_username" required><br><br>
    <button type="submit">Reset Password</button>
  </form>
</body>
</html>
