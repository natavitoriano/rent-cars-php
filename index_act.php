<?php
    include './src/config/conn.inc';
    session_start();
    $user = $_REQUEST["user"];
    $pass = $_REQUEST["pass"];

    $res = $mysqli->query("SELECT * FROM tab_Users WHERE Login='$user' AND Pass='$pass'");

    if($res->num_rows > 0){
        $_SESSION['logged'] = 'true';
        header('Location: ./src/pages/home.php');   
    } else {
        $_SESSION['MSGVerify'] = 'true';
        $_SESSION['MSG'] = '<b>Erro!</b> Usuário não encontrado';
        $_SESSION['MSGType'] = 'alert-danger';
        header('Location: index.php');
    }
?>