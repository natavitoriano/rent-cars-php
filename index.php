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
    include './src/pages/common-function.php';
    session_start();
    if(empty($_SESSION["logged"]) || $_SESSION["logged"] == "false"){
      verifyMSGS("./src");
      session_destroy();
    } else {
      header('Location: ./src/pages/home.php');
    }
  ?>
    <div class="bg-dark">
        <main class="d-flex justify-content-center align-items-center" style="width: 100%; height: 100vh;">
          <div class="card p-5 card-login">
            <div class="w-100">
              <form method="POST" action="index_act.php">
                <div class="mb-3">
                  <label for="user" class="form-label">Usuário</label>
                  <input type="text" class="form-control shadow" name="user" id="user" aria-describedby="user">
                </div>
                <div class="mb-5">
                  <label for="pass" class="form-label">Senha</label>
                  <input type="password" class="form-control shadow" id="pass" name="pass">
                </div>
                <div class="d-grid">
                  <button type="submit" class="btn btn-dark">Entrar</button>
                </div>
              </form>
            </div>
          </div>
        </main>
    </div>
    <script src="./src/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>