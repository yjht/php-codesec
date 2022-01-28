<?php
const $LOGIN_EXEPECTED_FORMAT = /^[a-z]{8}[a-z0-9]{4}$/;
const $PASSW_EXEPECTED_FORMAT = /^.{12,}$/;
const $BACK_URL = 'https://".$_SERVER['HTTP_HOST']."/back.php;

$login = $_POST['login'];
$passw = $_POST['password'];


if (preg_match($LOGIN_EXEPECTED_FORMAT, $login) !== 1 ) $login = "";
if (preg_match($PASSW_EXEPECTED_FORMAT, $passw) !== 1 ) $passw = "";

$login_data = array('login'=>$login, 'password'=>$passw);
$context = stream_context_create($login_data);

echo (file_get_contents($BACK_URL, false, $context));
