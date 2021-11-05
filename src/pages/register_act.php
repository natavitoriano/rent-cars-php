<?php
    include '../config/conn.inc';
    include '../pages/common-function.php';
    $timezone = new DateTimeZone('America/Sao_Paulo');
    $date = new DateTime('now', $timezone); 
    $dateConverted = $date->format('Y-m-d H:i:s');
    $dateConverted = str_replace('-','',$dateConverted);
    $dateConverted = str_replace(':','',$dateConverted);
    $dateConverted = str_replace(' ','',$dateConverted);
    $uploaddir = '../public/imgs/cars/';
    $uploadfile = $uploaddir . $dateConverted .basename($_FILES['imgCar']['name']);
    if (move_uploaded_file($_FILES['imgCar']['tmp_name'], $uploadfile)) {
    } else {
        $uploadfile = '../public/imgs/no_image.jpg';
    }
    session_start();
    $model = $_REQUEST["model"];
    $brand = $_REQUEST["brand"];
    $board = $_REQUEST["board"];
    $year = $_REQUEST["year"];
    
    $sql = "INSERT INTO tab_Cars VALUES('', '$model', '$brand', '$board', '$year', '$uploadfile','Sim')";

    if ($mysqli->query($sql) === TRUE) {
        insertMessage('true', '<strong>Sucesso!</strong> Veículo inserido com sucesso!', 'alert-success');
    } else {
        insertMessage('false', '<strong>Erro!</strong> Erro ao inserir o veículo!', 'alert-danger');
    }
    $mysqli->close();
    header('Location: ./register.php');
?>