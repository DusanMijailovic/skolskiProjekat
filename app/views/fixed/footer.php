</div>
<!-- /.col-lg-9 -->

</div>
<!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 border-top <?= ($_GET['page'] === 'login') ? 'fixed-bottom' : '' ?>">
  <div class="container">
    <div class="d-flex justify-content-end mb-3">
      <div class="d-flex mr-auto mb-3">
        <ul class="nav">
        <?php foreach($data["menu"] as $m): ?>
          <li class="nav-item active">
            <a class="nav-link text-dark" href="index.php?page=<?= $m->href ?>"><?= $m->name ?></a>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="mx-2 p-2 bd-highlight">
          <?php foreach($data["networks"] as $net): ?>
          <a href="<?=$net->link ?>" class="text-white hover-icon mr-4"><i class="fab <?=$net->icon ?> fa-sm"></i> </a>
          <?php endforeach; ?>
        </div>
    </div>
    <p class="m-0 text-center text-dark">Copyright &copy; Dušan Mijailović 2020</p>
  </div>
  <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script> -->
<!-- <script src="vendor/jquery/jquery.min.js"></script> -->
<!-- <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
<script src="public/js/script.js"></script>

<?php

if(isset($_GET["page"])){
    switch ($_GET["page"]) {
      case 'contact':
      echo "<script src = 'public/js/contact.js'></script>";
      break;
      case 'login':
      echo "<script src = 'public/js/login.js'></script>";
      break;
      case 'register':
      echo "<script src = 'public/js/register.js'></script>";
      break;
        case 'cart':
          echo "<script src = 'public/js/cart.js'></script>";
          break;
    }
}
?>
</body>

</html>