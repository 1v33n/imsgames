<form action="/request/create" method="post" class="form">
<div class="form-heading">
    <h2 class="form-title"><?= $heading ?></h2>
    <p>
        Unsere Website entstand in einer Projektwoche im Frühling 2022. Unser Ziel war, dass die Games, welche die IMS Schüler während der Ausbildung programmieren, auch publiziert und 
        gespielt werden können. Ohne diese Website wurden die Games mit viel Aufwand und Zeit programmiert, aber nach dem Abschluss nicht mehr gebraucht. Dies fanden wir sehr schade.<br>
        Wenn du auch ein Game hast, dann schick uns doch deine E-Mail Adresse und die URL deines Github Repositorys, in welchem du dein gesamtes Game gespeichert hast. Wir würden uns 
        über neue Games freuen. <br>
        Die Entwickler: <br>
        Denny Marti, Ivan Horvath, Amelie Zeller und Nathalie Krieg
    </p>
</div>
    <div class="form-field">
        <input class="form-input" type="text" id="email" name="email" placeholder="Email" required>
        <i class='bx bx-at bxf'></i>
    </div>

    <div class="form-field">
        <input class="form-input" type="text" id="git" name="git" placeholder="Github Repository" required>
        <i class='bx bxl-github bxf'></i>
    </div>

    <div class="form-field">
        <textarea class="form-input" type="text" id="textarea" name="textarea"
                  placeholder="Was möchten Sie uns sonst noch mitteilen?" required></textarea>
        <i class='bx bxs-pencil bxf'></i>
    </div>
    <button class="form-submit" type="submit" name="send">Einreichen</button>
        <input class="form-input" type="text" id="link" name="link"  placeholder="Github Repository" required>
        <i class='bx bxl-github form-icon'></i>
    </div>
    
    <button class="form-submit" type="submit" name="send" >Einreichen</button>
</form>

