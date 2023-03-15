<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <style>
        body {
            background-color: #f5f5f5;
        }
        .row {
            height: 100vh;
        }
        .login-col {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-wrapper {
            box-shadow: 0px 0px 10px #dadada;
            padding: 30px;
            border-radius: 10px;
            background-color: #fff;
            width: 30rem;
        }
    </style>
</head>
<body>

<section class="vh-100">
  <div class="container">
    <div class="row">
        <div class="col-md-12 login-col">
            <div class="login-wrapper">
            <h3>Login</h3>

            <hr>

            <?php if(isset($_SESSION['errors'])) : ?>
                <div class="alert alert-danger"><?= $_SESSION['errors'][0] ?></div>
            <?php endif; ?>

            <form method="POST" action="/admin/login">
            <!-- Email input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form1Example13">Email</label>
                    <input type="email" name="email" id="form1Example13" class="form-control form-control-lg" />
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form1Example23">Password</label>
                <input type="password" name="password" id="form1Example23" class="form-control form-control-lg" />
            </div>

            <div class="d-flex justify-content-between align-items-center mb-4">
                <!-- Checkbox -->
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                <label class="form-check-label" for="form1Example3"> Remember me </label>
                </div>
                <a href="#!">Forgot password?</a>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary">Sign in</button>
            </form>
            </div>
        </div>
    </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php unset($_SESSION['errors']); ?>
