<?php
    include('User.php');
  function is_ajax_request() {
    return isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
      $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
  }
  if(!is_ajax_request())
    exit;
    $data = [];
    $name =  isset($_POST['name'])? $_POST['name']:'';
    $email =  isset($_POST['email'])? $_POST['email']:'';
    $mobile =  isset($_POST['mobile'])? $_POST['mobile']:'';
    $user = new User($name,$email,$mobile);

    echo json_encode($user->sendData());
?>