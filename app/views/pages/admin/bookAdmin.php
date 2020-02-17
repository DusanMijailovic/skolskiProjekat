<i class="fas fa-table"></i>
Knjige Tabela </div>
<div class="container-fluid">

  <div class="card-body">
    <div class="table-responsive col-md-13">
      <table class="table">
        <thead>
          <th>ID</th>
          <th>Full name</th>
          <th>Email</th>
          <th>Member since</th>
          <th>Action</th>
        </thead>
        <tbody class="book-table">
        <?php foreach($data["book"] as $book): ?>
            <tr>
              <td><?= $book->bookID ?></td>
              <td><?= $book->name ?></td>
              <td><?= $book->description ?></td>
              <td><?= $book->price ?> dinara</td>
              <td><?= $book->priceSite ?> dinara</td>
              <td><img class="admin-img" src="<?= $book->imgSrc ?>" alt="<?= $book->imgAlt ?>"></td>
              <td>
              
                <button class="btn btn-danger delete-book" data-id="<?= $book->bookID ?>">Delete</button>
              <td><button class="btn btn-danger update-book" data-id="<?= $book->bookID ?>">Update</button></td>
                
              </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
      </table>
      <div class="col-md-3 mb-3">
      <input type="hidden" id="hdnBookID" />

        <label>Book name</label>
        <input type="text" class="form-control" id="name">
        
        <label>Book description</label>
        <input type="text" class="form-control" id="description">
       
        <label>Book price</label>
        <input type="text" class="form-control" id="price">
        
        <label>Book site price</label>
        <input type="text" class="form-control" id="priceSite">
        
        <label>Book src</label>
        <input type="text" class="form-control" id="imgSrc">
        
        <label>Book alt</label>
        <input type="text" class="form-control" id="imgAlt">

        <button class="btn btn-primary my-3 insert-book">Insert</button>
    </div>
    </div>
  </div>
</div>
</div>    
</div>
           
</div>    
</div>


</div>
    </div>