<i class="fas fa-table"></i>
Korisnik Tabela </div>
<div class="container-fluid">

  <div class="card-body">
    <div class="table-responsive">
      <table class="table">
        <thead>
          <th>ID</th>
          <th>Full name</th>
          <th>Email</th>
          <th>Member since</th>
          <th>Action</th>
        </thead>
        <tbody class="user-table">
        <?php foreach($data["user"] as $user): ?>
            <tr>
              <td><?= $user->userID ?></td>
              <td><?= $user->fullName ?></td>
              <td><?= $user->email ?></td>
              <td><?= $user->registerDate ?></td>
              <td>
                
                <button class="btn btn-danger delete-btn" data-id="<?= $user->userID ?>">Delete</button>
              </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>    
</div>
           
</div>    
</div>


</div>
    </div>