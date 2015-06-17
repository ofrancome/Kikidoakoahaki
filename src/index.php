<?php
include 'credentials/credentials.php';
include 'connectDB.php';

$selectEntries = $bdd->prepare('SELECT COUNT(*) FROM ENTRY');
$selectEntries->execute();
$entries = $selectEntries->fetch();
var_dump($entries);

?>
