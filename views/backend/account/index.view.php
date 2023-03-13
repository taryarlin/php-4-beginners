<?php include(base_path('views/backend/layouts/header.view.php')) ?>
<div class="text-right">
    <a href="/admin/accounts/create" class="btn btn-primary btn-sm">
        <span class="tf-icons bx bx-plus-medical"></span> Create Account
    </a>
</div>

<div class="table-responsive mt-4 table-wrapper">
    <table class="table" id="data_table">
      <thead>
        <tr></tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Phone</th>
          <th scope="col">Is Admin</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($users as $key => $user) : ?>
            <tr>
                <th scope="row"><?= $key + 1 ?></th>
                <td><?= $user['name'] ?></td>
                <td><?= $user['email'] ?></td>
                <td><?= $user['phone'] ?></td>
                <td>
                    <?php if($user['is_admin']) : ?>
                        <span class="badge bg-success">Admin</span>
                    <?php else : ?>
                        <span class="badge bg-primary">Member</span>
                    <?php endif ?>
                </td>

                <td>
                    <a href="/admin/accounts/edit?id=<?= $user['id'] ?>" class="btn btn-warning btn-sm"><i class='bx bx-edit'></i> Edit</a>
                    <?php if(getAuthUser()['email'] !== $user['email']) : ?>
                    <a href="/admin/accounts/delete?id=<?= $user['id'] ?>" class="btn btn-danger btn-sm"><i class='bx bxs-trash'></i> Delete</a>
                    <?php endif ?>
                </td>
            </tr>
        <?php endforeach ?>
      </tbody>
    </table>
</div>

<?php include(base_path('views/backend/layouts/footer.view.php')) ?>


<script>
    let table = new DataTable('#data_table');
</script>
