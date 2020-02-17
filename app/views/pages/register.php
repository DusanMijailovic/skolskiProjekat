<div class="container mt-4">
 <div class="row">
   <div class="col-lg-6 offset-lg-3 mt-5">
    <div id="successMessage" class="alert invisible" role="alert">
      <p class="text-center" id="msg"></p>
    </div>
    <form>
    <div class="form-group">
      <label for="exampleInputEmail1">Ime i prezime</label>
      <input type="text" class="form-control" id="name" name="fullName" aria-describedby="emailHelp" placeholder="Unesite ime i prezime" />
      <small id="nameError" class="form-text text-danger"></small>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email adresa</label>
      <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Unesite email" />
      <small id="emailError" class="form-text text-danger"></small>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Lozinka</label>
      <input type="password" class="form-control" id="password" name="password" aria-describedby="emailHelp" placeholder="Unesite lozinku">
      <small id="passwordError" class="form-text text-danger"></small>

    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Potvrda lozinke</label>
      <input type="password" class="form-control" id="confPass" name="confPass" placeholder="Potvrda lozinke">
      <small id="confirmPasswordError" class="form-text text-danger"></small>
    </div>
    <div class="form-group">
      <label>Pol</label> <br>
      <?php foreach($data["gender"] as $gen): ?>
        <input type="radio"  name="gender" value="<?= $gen->gender ?>" > <?= $gen->gender ?>
       
      <?php endforeach; ?>
      <small id="genderError" class="form-text text-danger"></small>

    </div>
    <button type="button" id="registerBtn" name="registerBtn" class="btn btn-orange text-white mt-4 mb-5">Registracija</button>
  </form>
  </div>
</div>
</div>