<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./src/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./src/css/styles.css" >
    <title>Login</title>
</head>
<body>
  <?php
    session_start();
    if(empty($_SESSION["logged"]) || $_SESSION["logged"] == "false"){
      if(!empty($_SESSION["MSGVerify"])) {
        $MSGVerify = $_SESSION["MSGVerify"];
        if($MSGVerify == "true"){
          $MSG = $_SESSION["MSG"];
          $MSGType = $_SESSION["MSGType"]
          ?>
          <div class="alert <?php echo $MSGType?>" role="alert">
            <?php echo $MSG?>
          </div>
          <?php
        }
        session_destroy();
      } else{ }  
    } else {
      header('Location: ./src/pages/home.php');
    }
  ?>
    <div>
        <main class="d-flex justify-content-center align-items-center" style="width: 100%; height: 100vh;">
          <div class="card p-5 card-login">
            <div class="w-100">
              <form method="POST" action="index_act.php">
                <div class="mb-3">
                  <label for="user" class="form-label">User</label>
                  <input type="text" class="form-control" name="user" id="user" aria-describedby="user">
                </div>
                <div class="mb-5">
                  <label for="pass" class="form-label">Password</label>
                  <input type="password" class="form-control" id="pass" name="pass">
                </div>
                <div class="d-grid">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </main>
    </div>
    <script src="./src/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>