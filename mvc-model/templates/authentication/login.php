<form action="signin/login" class="form" method="post">
    <div class="form-heading">
        <h2 class="form-title"><?= $heading ?></h2>
    </div>

    <div class="form-field">
        <input class="form-input" name="username" type="text" placeholder="Username" required>
        <i class='bx bxs-user form-icon'></i>
    </div>

    <div class="form-field">
        <input class="form-input" name="password" type="password" placeholder="Password" required>
        <i class='bx bxs-lock-alt form-icon'></i>
    </div>

    <div class="form-text">
        <p>Hast du noch keinen Account?</p>
        <p>Dann registriere dich <a class="link" href="/user/signup">hier</a></p>
    </div>

    <button class="form-submit" type="submit">Submit</button>
</form>