<?php

include_once '../controllers/c_user.php';

$user = new C_user();

if (isset($_POST['regis'])) {
    if ($_GET['aksi'] == 'regis') {
        $Username = $_POST['Username'];
        $Password = password_hash($_POST['Password'], PASSWORD_BCRYPT);
        $NamaJuri = $_POST['NamaJuri'];
            //memanggil method register
            $user->register($Username, $Password, $NamaJuri);
        
        }
        
}
elseif ($_GET['aksi'] == 'login') {
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    // echo _dump($Username, $Password);
    $user->login($Username, $Password);
}