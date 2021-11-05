<?php
    include '../config/conn.inc';
    include '../pages/common-function.php';
    session_start();
    $id = $_REQUEST["id-car-delete"];

    $sql = "DELETE FROM tab_Cars WHERE ID_Car ='".$id."'";

    if ($mysqli->query($sql) === TRUE) {
        insertMessage('true', '<strong>Sucesso!</strong> Veículo deletado com sucesso!', 'alert-success');
    } else {
        insertMessage('false', '<strong>Erro!</strong> Erro ao deletar o veículo!', 'alert-danger');
    }
    $mysqli->close();
    header('Location: ./list.php');
?>