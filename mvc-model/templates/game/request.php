<form action="/game/sendRequest" method="post" class="form">
<div class="form-heading">
    <h2 class="form-title"><?= $heading ?></h2>
</div>

<div class="form-field">
        <input class="form-input" type="text" id="fname" name="fname" placeholder="Vornamen" required>
        <i class='bx bxs-user form-icon'></i>
    </div>

    <div class="form-field">
        <input class="form-input" type="text" id="lname" name="lname" placeholder="Nachnamen" required>
        <i class='bx bxs-user form-icon'></i>
    </div>

    <div class="form-field">
        <input class="form-input" type="text" id="email" name="email" placeholder="Email" required>
        <i class='bx bx-at form-icon'></i>
    </div>

    <div class="form-field">
        <input class="form-input" type="text" id="git" name="git"  placeholder="Github Repository" required>
        <i class='bx bxl-github form-icon'></i>
    </div>
    
    <div class="form-field">
        <textarea class="form-input" type="text" id="textarea" name="textarea" placeholder="Was möchten Sie uns sonst noch mitteilen?" required></textarea>
        <i class='bx bxs-pencil form-icon'></i>
    </div>
    <button class="form-submit" type="submit" name="send" >Einreichen</button>
</form>

