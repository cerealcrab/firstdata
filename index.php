<?php

$view = isset($_GET['view']) ? $_GET['view'] : 'anzeige';
$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : '0';
// action überprüfen ob id 0 ist
if ($id < 1) {
    $view = 'fehler';
}
// kurzform vom switch case
include './view/' . $view . '.php';
?>
