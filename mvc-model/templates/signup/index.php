<html lang="de">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width = device-width, initial-scale = 1.0" />
        <script type="text/javascript" src="/js/SignUpValidation.js"></script>
    </head>

    <body>
        <main class="grid">
            <article>
                <form action="/user" method="post" class="col-6" onsubmit="validateForm()">
                    <div class="form-group">
                        <label for="username">Benutzername</label>
                        <input type="text" id="username" name="username" placeholder="Geben Sie ihren Benutzernamen ein." class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="password">Passwort</label>
                        <input type="password" id="password" name="password" placeholder="Geben Sie ihr Passwort ein." class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="passwordconf">Passwort bestätigen</label>
                        <input type="password" id="passwordconf" name="passwordconf"  placeholder="Bestätigen Sie ihr Passwort." class="form-control">
                    </div>
                    <button type="submit" name="send" class="btn btn-primary">Absenden</button>
                </form>
            </article>
            <article>
                <p>
                    Du hast bereits ein Account?<br>
                    Dann melde dich jetzt <a href="/signin">hier</a> an.
                </p>
            </article>
        </main>
    </body>
</html>


