Hallo Welt!
<?php
    if(isset($isLoggedIn) && $isLoggedIn) {
        echo "<a class='btn btn-danger' href='/signin/logout'>Logout</a>";
    }
?>