<?php
include_once "public/include/header.php";
include_once "public/include/navbar.php";
?>
<h1>Register Page </h1>
<div class="container">
<form method="post" action="/register"  autocomplete="off">
<label for="name">Full Name</label>
<input type="text" id="name" minlength="3" name="fullname" required>
<label for="email">Email</label>
<input type="email" id="email" name="email" required>
<label for="psw">Password</label>
<input type="password" id="psw" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
<!--<label for="save">
<input type="checkbox" id="save" name="save" checked required>Save Login
</label>-->
<input type="submit" value="Register">
</form>
</div>
<div id="message">
<h3>Password must contain the following:</h3>
<p id="letter" class="invalid">A <b>lowercase</b> letter</p>
<p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
<p id="number" class="invalid">A <b>number</b></p>
<p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>
<?php
include_once "public/include/footer.php";
?>
