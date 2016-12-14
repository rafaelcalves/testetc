<?php
echo $_SESSION['user'];
if( !isset(  $_SESSION['usr'] ) ||   (strlen($_SESSION['usr']) < 1)) {
    header( 'location: index.php' );
    exit;
}
?>
