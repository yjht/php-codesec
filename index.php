<?php
const $LOGIN_EXEPECTED_FORMAT = /^[a-z]{8}[a-z0-9]{4}$/;
const $PASSW_EXEPECTED_FORMAT = /^.{12,}$/;
const $CONTENT_EXPECTED_FORMAT = //;
const $BACK_URL = 'https://'.$_SERVER['HTTP_HOST'].'/back.php';

if (isset($_POST['login'])) {
  $login = $_POST['login'];
  $passw = $_POST['password'];
  $content= $_POST['content'];

  if (preg_match($LOGIN_EXEPECTED_FORMAT, $login) !== 1 ) $login = "";
  if (preg_match($PASSW_EXEPECTED_FORMAT, $passw) !== 1 ) $passw = "";

  $login_data = array('login'=>$login, 'password'=>$passw, 'content'=>$content);
  $context = stream_context_create($login_data);
  echo (file_get_contents($BACK_URL, false, $context));
  
} else {
  
  include('login.html');
  
}
