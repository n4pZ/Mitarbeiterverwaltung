<?php
include_once __DIR__ . "/../layout/header.php";
?>
<div>
    <form class="container min-vh-100 d-flex justify-content-center align-items-center flex-column">
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="register_email" name="register_email"
                placeholder="E-Mail Addresse">
            <label for="register_email">E-Mail Addresse</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control" id="register_password" name="register_password"
                placeholder="Passwort">
            <label for="register_password">Passwort</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control" id="register_password_repeat" name="register_password_repeat"
                placeholder="Passwort">
            <label for="register_password_repeat">Passwort wiederholen</label>
        </div>
        <div class="" role="">
            <a href="login" class="btn btn-primary">Login</a>
            <button type="button" class="btn btn-success" id="register_button">
                Registrieren
            </button>
        </div>
    </form>
</div>

<script src="/assets/js/register.js"></script>
<?php
include_once __DIR__ . "/../layout/footer.php";
?>