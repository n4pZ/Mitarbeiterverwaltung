<?php
include_once __DIR__ . "/../layout/header.php";
?>

<div>
    <form class="container d-flex justify-content-center align-items-center flex-column">
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="login_email" name="login_email" placeholder="name@example.com">
            <label for="login_email">Email address</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="login_passworld" name="login_password"
                placeholder="Password">
            <label for="login_passworld">Password</label>
        </div>
        <div class="" role="">
            <button type="submit" class="btn btn-primary">
                Registrieren
            </button>
            <button type="submit" class="btn btn-success">
                Einloggen
            </button>
        </div>

    </form>
</div>



<?php
include_once __DIR__ . "/../layout/footer.php";
?>