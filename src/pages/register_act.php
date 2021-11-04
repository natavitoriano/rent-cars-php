<?php
    $timezone = new DateTimeZone('America/Sao_Paulo');
    $date = new DateTime('now', $timezone); 
    $dateConverted = $date->format('Y-m-d H:i:s');
    $dateConverted = str_replace('-','',$dateConverted);
    $dateConverted = str_replace(':','',$dateConverted);
    $dateConverted = str_replace(' ','',$dateConverted);
    $uploaddir = '../public/imgs/cars/';
    $uploadfile = $uploaddir . $dateConverted .basename($_FILES['imgCar']['name']);
    if (move_uploaded_file($_FILES['imgCar']['tmp_name'], $uploadfile)) {
        echo "Arquivo válido e enviado com sucesso.\n";
    } else {
        echo "Possível ataque de upload de arquivo!\n";
    }
    include '../config/conn.inc';
    session_start();
    $modelo = $_REQUEST["modelo"];
    $marca = $_REQUEST["marca"];
    $placa = $_REQUEST["placa"];
    $ano = $_REQUEST["ano"];
    //$imgCar = $_REQUEST["imgCar"];
    $file = $_FILES['imgCar']['name'];

    echo "$modelo - $marca - $placa - $ano <br> $file"
/*
    $res = $mysqli->query("SELECT * FROM tab_Users WHERE Login='$user' AND Pass='$pass'");

    if($res->num_rows > 0){
        $_SESSION['logged'] = 'true';
        header('Location: ./src/pages/home.php');   
    } else {
        $_SESSION['MSGVerify'] = 'true';
        $_SESSION['MSG'] = '<b>Erro!</b> Usuário não encontrado';
        $_SESSION['MSGType'] = 'alert-danger';
        header('Location: index.php');
    }*/
?>