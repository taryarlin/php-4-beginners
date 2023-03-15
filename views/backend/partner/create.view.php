<?php include(base_path('views/backend/layouts/header.view.php')) ?>

<div class="text-right">
    <a href="/admin/partners" class="btn btn-primary btn-sm">
        <span class="tf-icons bx bx-arrow-back"></span> Back
    </a>
    </a>
</div>

<div class="card my-4">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Create Partner</h5>
    </div>
    <div class="card-body">
        <?php include(base_path('views/backend/page_info.view.php')) ?>

        <form method="POST" action="/admin/partners" enctype="multipart/form-data">

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
                <label class="form-label" for="basic-icon-default-phone">Date of birth</label>
                <div class="input-group input-group-merge">
                <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bxs-calendar"></i></span>
                <input type="text" name="dob" id="date_of_birth" class="form-control" >
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

<script>
    $(document).ready(function() {
        $( "#date_of_birth" ).datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: '1950:2023'
        });
    })
</script>
