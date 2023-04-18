<?php
if(!isset($_SESSION['login_id'])) {
    echo "Du er ikke logget inn";
    header("Refresh:1; url=login.php", true, 303);
    die();
}

?>
