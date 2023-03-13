<?php include(base_path('views/backend/layouts/header.view.php')) ?>
<div class="text-right">
    <a href="/admin/accounts" class="btn btn-primary btn-sm">
        <i class='bx bx-arrow-back'></i> Back
    </a>
</div>

<div class="card mt-4 text-center">
  <div class="card-body">
    <form method="POST" action="/admin/accounts/destroy">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="id" value="<?= $user['id'] ?>">

        <h5 class="card-title text-danger">Delete</h5>
        <p class="card-text">Are you sure to delete <span class="text-primary"><?= $user['email'] ?></span>?</p>
        <a href="/admin/accounts" class="btn btn-secondary btn-sm">Cancel</a>
        <button type="submit" class="btn btn-danger btn-sm">Confirm</button>
    </form>
  </div>
</div>


<?php include(base_path('views/backend/layouts/footer.view.php')) ?>
