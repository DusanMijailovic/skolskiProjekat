<!-- SIDE -->


 <!-- Page Content -->
 <div class="container">

 	<div class="row">

 		<div class="col-lg-3">

 			<nav class="navbar">
 			<div id="sb-search" class="sb-search " >
 				<form>
 					<input class="sb-search-input " onkeyup="buttonUp();" placeholder="Pretražite..." type="search"  name="search" id="search">
           <input class="sb-search-submit"  type="button"    id="btn">
 					<span class="sb-icon-search"><i class="fa fa-search"></i></span>
 				</form>
 			</div>
 		</nav>
 			<!-- search -->
 			<h1 class="mb-4">Kategorije</h1>
<?php foreach($data["categories"] as $category): ?>
 			
 			<div class="list-group">
			
 				<a href="#" class="list-group-item nav-link text-dark category" data-id="<?= $category->categoryID ?>"><?= $category->name ?></a>
 		
			 </div>
       <?php endforeach; ?>

 		</div>

<!-- SIDE -->

<?php
require_once "app/views/fixed/slider.php";

?>
<div class="row" id="books">

<?php foreach(array_slice($data["books"], 0, 6) as $book): ?>

  <div class="col-lg-4 col-md-6 mb-4">
    <div class="shadow bg-white rounded">
      <div class="card h-100 ">
        <a href="index.php?page=book&id=<?= $book->bookID ?>"><img class="card-img-top" src="<?= $book->imgSrc ?>" alt="<?= $book->imgAlt ?>"></a>
        <div class="card-body">
          <h4 class="card-title">
            <h2 class="font-weight-light"><?= $book->name ?></h2>
          </h4>
          <h5  class="cl-dark"><?= $book->price ?> dinara</h5>
          <p class="card-text"><?= substr($book->description, 0, 100) ?>...</p>
        </div>
        <div class="card-footer"> 
          <a class="btn btn-orange text-white" href="index.php?page=book&id=<?= $book->bookID ?>" role="button">Detaljnije</a>
       </div>
      </div>
    </div>
  </div> 
<?php endforeach; ?> 