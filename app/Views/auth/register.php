<?php
include_once __DIR__ . "/../layout/header.php";
?>
<div>
    <form class="container d-flex justify-content-center align-items-center flex-column">
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="register_email" name="register_email"
                placeholder="name@example.com">
            <label for="register_email">Email address</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control" id="register_password" name="register_password"
                placeholder="Password">
            <label for="register_passworld">Password</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control" id="register_password_repeat" name="register_password_repeat"
                placeholder="Password">
            <label for="register_password_repeat">Password wiederholen</label>
        </div>
        <div class="" role="">
            <a href="login" class="btn btn-primary">Login</a>
            <button type="submit" class="btn btn-success">
                Registrieren
            </button>
        </div>
    </form>
</div>
<?php
include_once __DIR__ . "/../layout/footer.php";
?>