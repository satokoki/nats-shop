<?php

$to = 'kosa0611@gmail.com';
$subject = $_POST['_subject'];
$body = $_POST['username'] . "\n". $_POST['usercomment'];
mail($to,$subject,$body);

?>
	