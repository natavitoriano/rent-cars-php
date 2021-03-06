<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css" >
    <title>Home</title>
</head>
<body>
    <div class="h-100">
        <?php
            include '../pages/common-function.php';
            verifyLogin();
        ?>
        <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Alugar Veículos</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav d-flex justify-content-around w-50">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="./register.php">Cadastrar</a>
                    <a class="nav-link" href="./list.php">Lista de Veículos</a>
                </div>
                <div class="w-100 d-flex justify-content-end">
                    <form action="./logout_act.php">
                        <button id="btn-exit"class="btn-exit btn btn-outline-danger" type="submit">Sair</button>
                    </form>    
                </div>
                </div>
            </div>
        </nav>
        </header>
        <main class="d-flex justify-content-center align-items-center h-75">
            <p class="fs-1 fw-bold">Bem-Vindo</p>
        </main>
        <div class="container">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                    <p class="col-md-4 mb-0 text-muted">© 2021 Natã Vitoriano</p>
                    <ul class="nav col-md-4 justify-content-end">
                        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted active" aria-current="page">Home</a></li>
                        <li class="nav-item"><a href="./register.php" class="nav-link px-2 text-muted">Cadastrar</a></li>
                        <li class="nav-item"><a href="./list.php" class="nav-link px-2 text-muted">Lista de Veículos</a></li>
                    </ul>    
            </footer>
        </div>  
    </div>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>