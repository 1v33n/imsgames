<form action="/user/doCreate" class="form" method="post" onsubmit="validateForm()">
    <div class="form-heading">
        <h2 class="form-title"><?= $heading ?></h2>
    </div>

    <div class="form-field">
        <input class="form-input" id="username" name="username" placeholder="Benutzername" type="text" required>
        <i class='bx bxs-user form-icon'></i>
    </div>
    <div class="form-field">
        <input class="form-input" id="password" name="password" placeholder="Passwort" type="password" required>
        <i class='bx bxs-lock-alt form-icon'></i>
    </div>
    <div class="form-field">
        <input class="form-input" id="passwordConfirm" placeholder="Passwort bestätigen" type="password" required>
        <i class='bx bxs-lock-alt form-icon'></i>
    </div>

    <div class="form-text">
        <p>Hast du bereits einen Account?</p>
        <p>Dann melde dich <a class="link" href="/authentication">hier</a> an</p>
    </div>

    <button class="form-submit" name="send" type="submit">Absenden</button>
</form>