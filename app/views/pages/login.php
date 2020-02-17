
 
<div class="container mt-4">
<div class="row">
   <div class="col-lg-6 offset-lg-3 mt-5">
   <?php if (isset($_SESSION['noUser'])) : ?>
    <div class="alert alert-warning mt-3" role="alert"><?= $_SESSION['noUser'] ?></div>
  <?php unset($_SESSION['noUser']); ?>
    
  <?php endif; ?>
<form method="POST" action="index.php?page=checkLogin"  onsubmit="return login();">


    <div class="form-group">
      <label for="email">Email adresa</label>
      <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Uneti email">
      <small id="emailError" class="form-text text-danger"></small>
    </div>
    <div class="form-group">
      <label for="password">Lozinka</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Lozinka">
      <small id="passwordError" class="form-text text-danger"></small>
    </div>
    <input type="submit" id="loginBtn" name="loginBtn" class="btn btn-orange text-white mt-4 mb-5" value="Prijava">
  </div>
</div>
</form>

</div>