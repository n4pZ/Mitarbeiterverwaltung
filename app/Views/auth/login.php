<?php
include_once __DIR__ . "/../layout/header.php";
?>

<div>
    <form class="container min-vh-100 d-flex justify-content-center align-items-center flex-column">
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="login_email" name="login_email" placeholder="name@example.com">
            <label for="login_email">Email address</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control" id="login_password" name="login_password"
                placeholder="Password">
            <label for="login_password">Password</label>
        </div>
        <div class="" role="">
            <a href="register" class="btn btn-primary">Register</a>
            <button type="button" class="btn btn-success" id="login_button">
                Einloggen
            </button>
        </div>
    </form>
</div>

<script src="/assets/js/login.js"></script>
<?php
include_once __DIR__ . "/../layout/footer.php";
?>