<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
   <h2>section, <?= !isset($data["company"]) ?: $data["company"] ?> </h2>
   <a href="<?= BASE_URL ?>/register" class="btn btn-primary">add user</a>
   <p>daftar user</p>
  
      <div class="table-responsive">
         <table class="table table-striped table-sm">
            <thead>
            <tr>
               <th scope="col">No</th>
               <th scope="col">username</th>
               <th scope="col">Email</th>
               <th scope="col">First Name</th>
               <th scope="col">Last Name</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($data['users'] as $data ) { ?>
            <tr>
               <td><?= $data['id'] ?></td>
               <td><?= $data['username'] ?></td>
               <td><?= $data['email'] ?></td>
               <td><?= $data['first_name'] ?></td>
               <td><?= $data['last_name'] ?></td>
            </tr>
            <?php }?>
            </tbody>
         </table>
      </div>
</main>