<!-- Page Content -->

<div class="container">

  <!-- Portfolio Item Heading -->
  <?php
  if(isset($data["book"])) :
    ?>
    <h1 id="title" class="my-5 text-uppercase "><?=$data["book"]->title ?>
    <!-- <small>Secondary Text</small> -->
  </h1>

  <!-- Portfolio Item Row -->
  <div class="row">

    <div class="col-md-5">
      <img id="picture" class="img-fluid picture" src="<?=$data["book"]->imgSrc ?>" alt="<?=$data["book"]->imgAlt ?>">
    </div>

    <div class="col-md-7">
        

      <p><?=$data["book"]->description ?></p>
      <h3 class="my-5">Detalji o proizvodu</h3>
      <ul class="list-unstyled">
      <li  class="float-sm-right">
        <div id="successMessage" class="alert invisible t w-100"  role="alert"  style="height: 165px;">
            <p class="text-center mt-5" id="msg"></p>
        </div>
        </li>
        <li class="mt-4">Cena: <?=$data["book"]->price ?> dinara</li>
        <li class="mt-4" >Cena na sajtu: <span id="price-site"><?= $data["book"]->priceSite ?> dinara</span></li>
       
        <li class="mt-4">Ušteda: <?= bcsub($data["book"]->price, $data["book"]->priceSite) ?>  </li>
       
        <?php if(isset($_SESSION['user'])): ?>
         
          <input id="categoryID" type="hidden" name ="category" value="<?= $data['book']->cbID ?>" />
          <input id="userID" type="hidden" name ="userID" value="<?= $_SESSION['user']->userID ?>" />
          <span>
            <button type="button" id="addBookBtn" class="btn btn-orange text-white my-5 ">Dodaj u korpu</button>
          </span>

        <?php endif; ?>

      </ul>
    </div>
  <?php endif; ?>
</div>
<!-- /.row -->

<!-- Related Projects Row -->
<!-- <h3 class="my-4">Slični proizvodi</h3>

<div class="row">
  <?php

  foreach(array_slice($data["books"], 0, 4) as $book): ?>
    <div class="col-md-3 col-sm-6 mb-4">
      <a href="#">
        <img class="img-fluid" src="<?= $book->imgSrc ?>" alt="<?= $book->imgAlt ?>">
      </a>
    </div>
  <?php endforeach; ?>
    <!-- <div class="col-md-3 col-sm-6 mb-4">
      <a href="#">
        <img class="img-fluid" src="http://placehold.it/500x300" alt="">
      </a>
    </div> -->

  </div> -->
  <!-- /.row -->

</div>
<!-- /.container -->