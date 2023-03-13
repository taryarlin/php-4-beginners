<?php include(base_path('views/backend/layouts/header.view.php')) ?>
<div class="card mb-4">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Create Account</h5>
    </div>
    <div class="card-body">
        <?php if(isset($errors)) : ?>
            <div class="alert alert-danger">
                <ul class="mb-0">
                    <?php foreach($errors as $error) : ?>
                        <li><?= $error ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <form method="POST" action="/admin/accounts" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label" for="basic-icon-default-fullname">Select Admin</label>
                <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>

                <select name="account_id" class="form-control">
                        <?php foreach($owners as $owner) : ?>
                            <option value="<?= $owner['id'] ?>"><?= $owner['name'] ?></option>
                        <?php endforeach ?>
                </select>

                </div>
            </div>

            <div class="mb-3">
                <label class="form-label" for="basic-icon-default-fullname">Name</label>
                <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                <input type="text" name="name" class="form-control" id="basic-icon-default-fullname" placeholder="John Doe" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2">
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label" for="basic-icon-default-email">Email</label>
                <div class="input-group input-group-merge">
                <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                <input type="email" name="email" id="basic-icon-default-email" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="basic-icon-default-email2">
                <span id="basic-icon-default-email2" class="input-group-text">@example.com</span>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label" for="basic-icon-default-company">Password</label>
                <div class="input-group input-group-merge">
                <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-lock-alt"></i></span>
                <input type="password" name="password" id="basic-icon-default-company" class="form-control" placeholder="ACME Inc." aria-label="ACME Inc." aria-describedby="basic-icon-default-company2">
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label" for="basic-icon-default-company">Confirm Password</label>
                <div class="input-group input-group-merge">
                <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-lock-alt"></i></span>
                <input type="password" name="password_confirmation" id="basic-icon-default-company" class="form-control" placeholder="ACME Inc." aria-label="ACME Inc." aria-describedby="basic-icon-default-company2">
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label" for="basic-icon-default-phone">Phone No</label>
                <div class="input-group input-group-merge">
                <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-phone"></i></span>
                <input type="text" name="phone" id="basic-icon-default-phone" class="form-control phone-mask" placeholder="658 799 8941" aria-label="658 799 8941" aria-describedby="basic-icon-default-phone2">
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label" for="basic-icon-default-message">Address</label>
                <div class="input-group input-group-merge">
                <span id="basic-icon-default-message2" class="input-group-text"><i class="bx bx-comment"></i></span>
                <textarea id="basic-icon-default-message" name="address" class="form-control" placeholder="Hi, Do you have a moment to talk Joe?" aria-label="Hi, Do you have a moment to talk Joe?" aria-describedby="basic-icon-default-message2"></textarea>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label" for="basic-icon-default-phone">Profile</label>
                <div class="input-group input-group-merge">
                <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-image-alt"></i></span>
                <input type="file" name="profile" id="basic-icon-default-phone" class="form-control phone-mask" placeholder="658 799 8941" aria-label="658 799 8941" aria-describedby="basic-icon-default-phone2">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
<?php include(base_path('views/backend/layouts/footer.view.php')) ?>
