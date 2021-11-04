<?php
    include './src/config/conn.inc';
    session_start();
    $user = $_REQUEST["user"];
    $pass = $_REQUEST["pass"];

    $res = $mysqli->query("SELECT * FROM tab_Users WHERE Login='$user' AND Pass='$pass'");

    if($res->num_rows > 0){
        while($row = $res->fetch_assoc()){
        echo "id: ".$row["ID_User"]." - User: ".$row["Login"];
        }
    } else {
        $_SESSION['MSGVerify'] = 'true';
        $_SESSION['MSG'] = '<b>Erro!</b> Usuário não encontrado';
        $_SESSION['MSGType'] = 'alert-danger';

        header('Location: index.php');
    }
    
        
    //echo "$mysqli->host_info";
?>