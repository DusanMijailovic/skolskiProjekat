<i class="fas fa-table"></i>
Kontakt Tabela </div>
<div class="container-fluid">

  <div class="card-body">
    <div class="table-responsive">
      <table class="table">
        <thead>
          <th>ID</th>
          <th>Full name</th>
          <th>Email</th>
          <th>Content</th>
          <th>Action</th>
        </thead>
        <tbody class="contact-table">
        <?php foreach($data["contact"] as $contact): ?>
            <tr>
              <td><?= $contact->contactID ?></td>
              <td><?= $contact->fullName ?></td>
              <td><?= $contact->email ?></td>
              <td><?= $contact->content ?></td>
              <td>
                <button class="btn btn-danger delete-contact" data-id="<?= $contact->contactID ?>">Delete</button>
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