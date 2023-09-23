<?php

$date = (string) $_POST['date'];
$date = explode('-', $date);
$yo = getdate()['year'] - $date[0];
echo '<center>You are: ' . $yo . ' years old</center>';

?>