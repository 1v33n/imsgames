Hallo Welt!<br>
<?php
    if($isLoggedIn) {
        echo "<a href='/authentication/logout'>Logout</a>";
    }
    else{
        echo "ausgeloggt";
    }
?>