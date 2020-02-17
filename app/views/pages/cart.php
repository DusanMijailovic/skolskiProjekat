

<div class="container container-fluid mt-5">

<div id="successMessage" class="alert invisible"  role="alert">
  <p class="text-center" id="msg"></p>
</div>

<table class="table table-hover">
  <thead>

    <tr>
    </tr>
    <tr id="price">
    <?php foreach($data["sum"] as $s): ?>
      <td class="lead font-weight-bold" style="font-size:20px">Ukupno: <?= $s->price ?> dinara</td>
    <?php endforeach; ?>
     </tr>
    </tr>
    <tr>
    
      <th scope="col">Proizvod</th>
      <th scope="col">Naziv</th>
      <th scope="col">Cena</th>

    
    </tr>
  </thead>
  <tbody id="table-cart">
  <?php foreach($data["products"] as $cart): ?>
    <tr>
   
      <td><img class="w-25" src="<?= $cart->imgSrc ?>" alt="<?= $cart->imgAlt ?>"></td>
      <td class="lead" style="font-size:20px"><?= $cart->name ?></td>
      <td class="lead" style="font-size:20px"><?= $cart->priceSite ?> dinara</td>
      <td><button type="button" class="btn btn-orange text-white deleteBtn" data-id="<?= $cart->cartID ?>" role="button">Obriši</button></td>
      <td><button type="button" class="btn btn-orange text-white deleteBtn" data-id="<?= $cart->cartID ?>" role="button">Kupite</button></td>
    
    <?php endforeach; ?>
  </tbody>
</table>



</div>