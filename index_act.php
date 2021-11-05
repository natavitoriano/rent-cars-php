<?php
    include './src/config/conn.inc';
    include './src/pages/common-function.php';
    session_start();
    $user = $_REQUEST["user"];
    $pass = $_REQUEST["pass"];

    $res = $mysqli->query("SELECT * FROM tab_Users WHERE Login='$user' AND Pass='$pass'");

    if($res->num_rows > 0){
        $_SESSION['logged'] = 'true';
        $mysqli->close();
        header('Location: ./src/pages/home.php');   
    } else {
        $mysqli->close();
        insertMessage('true', '<strong>Erro!</strong> Usuário não encontrado', 'alert-danger');
        header('Location: index.php');
    }
?>