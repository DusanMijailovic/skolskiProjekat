<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-white fixed-top border-bottom">
    <div class="container">
      <a class="navbar-brand" href="index.php?page=home"><img src="public/images/logo.png" alt="logo"></a>
     <!--  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> -->
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto text-black-50">
        <?php foreach($data["menu"] as $m): ?>
          <li class="nav-item active">
            <a class="nav-link text-dark" href="index.php?page=<?= $m->href ?>"><?= $m->name ?></a>
          </li>
      
        <?php endforeach; ?>
        <?php if(isset($_SESSION['user'])): ?>
          <li class="nav-item">
            <a class="nav-link text-white btn btn-orange mr-2" href="index.php?page=logout">Odjava</a>
          </li>
          <li class="mt-2">
          <input type="hidden" id="userID" value="<?= $_SESSION['user']->userID ?>">
          <?php foreach($data["cartNumber"] as $number) : ?>
            <a href="index.php?page=cart" class="text-black-50 mt-4 cartNumber" id="btnCart"><i class="fas fa-shopping-cart"> (<?= $number->sum ?>)</i> </a>
          <?php endforeach; ?>
          </li>
        <?php else: ?>
          <li class="nav-item">
            <a class="nav-link text-white btn btn-orange mr-2" href="index.php?page=login">Prijava</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white btn btn-orange mr-2" href="index.php?page=register">Registracija</a>
          </li>
         
        <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>