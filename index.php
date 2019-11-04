<?php 
require 'header.php';
//require 'db_key.php';
?>
<body>

<div class = 'container'>
  <div>
    <div><h1>Login to Control Panel</h1></div>
  </div>
  <form method = 'POST' action = 'backend.php' >
    <div class="form-group">
      <label>Username : </label>
      <input class= 'form-control w-25' type="text" name="username">
      <label>Password :</label>
      <input class= 'form-control w-25' type="password" name="password" id="password" autocomplete="off">
    </div>
    <button class = 'btn btn-outline-info' type="submit" name="login" value= 'login' class="submit">Login</button>
  </form>
  <div id="footer-box">
    <p>Not a member? <a href="/register.php" class="sign-up">Sign up now</a></p>
  </div>
</div>
</body>

</html>
