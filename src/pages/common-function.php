<?php
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
              <div class="alert <?php echo $MSGType?> alert-dismissible fade show fixed-top" role="alert">
                <?php echo $MSG?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              <?php
            }
            destroyMessage();
          } else{ }  
    }
?>