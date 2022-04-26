<html lang="de">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width = device-width, initial-scale = 1.0" />
    </head>
    <body>
        <main class="grid">
            <!-- <div class="alert alert-danger" role="alert">
                <?= $msg ?>
            </div> -->
            <article>
                <form action="/signin" method="post" class="col-6">
                    <div class="form-group">
                        <label for="username">Benutzername</label>
                        <input  type="text" id="username" name="username" placeholder="Geben Sie Ihren Benutzernamen ein." class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="password">Passwort</label>
                        <input type="password" id="password" name="password" placeholder="Geben Sie Ihr Passwort ein." class="form-control">
                    </div>
                    <button type="submit" name="send" class="btn btn-primary">Absenden</button>
                </form>
            </article>
            <article>
                <p>
                    Du hast noch kein Account?<br>
                    Dann registriere dich jetzt <a href="/user/create">hier</a>.
                </p>

            </article>
        </main>
    </body>
</html>
