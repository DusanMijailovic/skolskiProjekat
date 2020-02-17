<div class="container mt-5">
	<div class="row">
		<div class="col-lg-6 offset-lg-3 mt-4">
    <?php if (isset($_SESSION['message'])) : ?>
			<div class="alert alert-success" role="alert">
  <?= $_SESSION['message'] ?>
</div>
      <?php unset($_SESSION['message']); ?>
      <?php endif; ?>

  <div class="form-row">
    <div class="col-md-12 mb-3">
    <form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>?page=contact-Upis" onsubmit="return contact();">
      <label for="validationCustom01">Ime i prezime</label>
      <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Ime i prezime"/>
      <small id="fullNameHelp" class="form-text text-danger"></small>
    </div>
  </div>
  <div class="form-row">
	<div class="col-md-12">
		<label for="validationCustom02">Email</label>
      <input type="text" class="form-control" id="email" name="email" placeholder="Email adresa"/>
      <small id="emailHelp" class="form-text text-danger"></small>
	</div>
  </div>
  <div class="form-group mt-4">
  	<label for="">Vaša poruka</label>
    <textarea id="content" name="content" class="form-control"></textarea>
    <small id="contentHelp" class="form-text text-danger"></small>
  </div>
  <button type="submit" name="sendContact" value="Pošalji" class="btn btn-orange text-white mt-4 mb-5">Pošalji</button>
  <!-- <button class="btn btn-orange text-white mt-4 mb-5" id="contactBtn" name="contactBtn">Pošalji</button> -->
  </form>
		</div>
	</div>
</div>