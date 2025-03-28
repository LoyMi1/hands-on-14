<?php include 'header.php'; ?>
<h2>Register</h2>
<form>
  <input type="text" name="username" placeholder="Username" required><br>
  <input type="email" name="email" placeholder="Email" required><br>
  <input type="password" name="password" placeholder="Password" minlength="6" required><br>
  <input type="password" name="confirm_password" placeholder="Confirm Password" minlength="6" required><br>
  <button type="submit">Register</button>
</form>
<?php include 'footer.php'; ?>