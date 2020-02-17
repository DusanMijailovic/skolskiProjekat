<i class="fas fa-table"></i>
Kategorije Tabela </div>
<div class="container-fluid">

  <div class="card-body">
    <div class="table-responsive">
      <table class="table">
        <thead>
          <th>ID</th>
          <th>Name</th>
          <th>Action</th>
        </thead>
        <tbody class="category-table">
        <?php foreach($data["category"] as $category): ?>
            <tr>
              <td><?= $category->categoryID ?></td>
              <td><?= $category->name ?></td>
             
              <td>
                
                <button class="btn btn-danger delete-category" data-id="<?= $category->categoryID ?>">Delete</button>
                <button class="btn btn-danger update-category" data-id="<?= $category->categoryID ?>">Update</button>

              </td>
            </tr>
        <?php endforeach; ?>

    
        </tbody>
      </table>

    <div class="col-md-2 mb-3">
        <label>Category name</label>
        <input type="hidden" id="hdnID" />

        <input type="text" class="form-control" id="category">
        <button class="btn btn-primary my-3 insert-btn">Insert</button>
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