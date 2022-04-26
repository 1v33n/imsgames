Hallo Welt!<br>
<?php
    if($isLoggedIn) {
        echo "<a class='btn btn-danger' href='/signin/logout'>Logout</a>";
    }
    else{
        echo "ausgeloggt";
    }
?>