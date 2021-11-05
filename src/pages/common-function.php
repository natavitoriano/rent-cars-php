<?php
    function verifyLogin(){
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        if($_SESSION['logged'] == 'true'){}
        else header('Location: ../../index.php');
    }
    function insertMessage($MSGVerify, $MSG, $MSGType){
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION['MSGVerify'] = $MSGVerify;
        $_SESSION['MSG'] = $MSG;
        $_SESSION['MSGType'] = $MSGType;
    }

    function destroyMessage(){
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION['MSGVerify'] = 'false';
        $_SESSION['MSG'] = '';
        $_SESSION['MSGType'] = '';
    }

    function verifyMSGS(){
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        if(!empty($_SESSION["MSGVerify"])) {
            $MSGVerify = $_SESSION["MSGVerify"];
            if($MSGVerify == "true"){
              $MSG = $_SESSION["MSG"];
              $MSGType = $_SESSION["MSGType"]
              ?>
              <div id="alert-padrao" class="alert <?php echo $MSGType?> alert-dismissible fade show fixed-top" role="alert">
                <?php echo $MSG?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              <script src="/veiculos/src/js/jquery-3.6.0.min.js"></script>
                <script>
                    $('document').ready(function() {
                            $("#alert-padrao").ready(function(){  
                                setTimeout(function(){
                                    $('#alert-padrao').fadeOut();
                                },3000);
                            });
                    });
                </script>
              <?php
            }
            destroyMessage();
          } else{ }  
    }
?>