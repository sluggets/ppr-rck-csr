<?php include'header.php'; ?>
<div class="flex-container">
<form>
  <label for="username">Username: </label>
  <input type="text" placeholder="username" label="username" name="username" autocomplete="username" id="username"
   maxlength="40">

  <label for="pass">Password: </label>
  <input type="password" placeholder="password" label="username" name="pass" autocomplete="current-password" id="pass"
   maxlength="40">
  <input type="submit" name="submit" value="submit">
</form>
</div>

<?php include 'footer.php'; ?>
