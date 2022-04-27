<form action="/request/create" method="post" class="form">
<div class="form-heading">
    <h2 class="form-title"><?= $heading ?></h2>
</div>
    <div class="form-field">
        <input class="form-input" type="text" id="email" name="email" placeholder="Email" required>
        <i class='bx bx-at form-icon'></i>
    </div>

    <div class="form-field">
        <input class="form-input" type="text" id="link" name="link"  placeholder="Github Repository" required>
        <i class='bx bxl-github form-icon'></i>
    </div>
    
    <button class="form-submit" type="submit" name="send" >Einreichen</button>
</form>

