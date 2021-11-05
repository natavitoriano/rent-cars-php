<?php
    include '../config/conn.inc';
    include '../pages/common-function.php';
    session_start();
    $id = $_REQUEST["up-id-car"];
    $model = $_REQUEST["up-model"];
    $brand = $_REQUEST["up-brand"];
    $board = $_REQUEST["up-board"];
    $year = $_REQUEST["up-year"];
    $available = $_REQUEST["up-available"];
     
    $sql = "UPDATE Cars SET Model='".$model."', Brand='".$brand."', Board='".$board."', Year='".$year."', Available='".$available."' WHERE ID_Car ='".$id."'";

    if ($mysqli->query($sql) === TRUE) {
        insertMessage('true', '<strong>Sucesso!</strong> Veículo atualizado com sucesso!', 'alert-success');
    } else {
        insertMessage('false', '<strong>Erro!</strong> Erro ao atualizar o veículo!', 'alert-danger');
    }
    $mysqli->close();
    header('Location: ./list.php');
?>