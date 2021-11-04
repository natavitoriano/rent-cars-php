<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css" >
    <title>Cadastro</title>
</head>
<body>
    <div>
        <?php
            include '../pages/common-function.php';
            verifyMSGS();
        ?>
        <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="./home.php">Alugar Veículos</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav d-flex justify-content-around w-50">
                    <a class="nav-link"  href="./home.php">Home</a>
                    <a class="nav-link active" aria-current="page" href="#">Cadastrar</a>
                    <a class="nav-link" href="./list.php">Lista de Veículos</a>
                </div>
                </div>
            </div>
        </nav>
        </header>
        <main class="container d-flex flex-column align-items-center">
            <p class="fs-2 mt-3">Cadastro de veículos</p>
            <div class="card mt-2 p-5 w-75 shadow-lg">
                <form class="row g-3" enctype="multipart/form-data" method="POST" action="register_act.php">
                    <div class="col-md-6">
                        <label for="pass" class="form-label">Modelo</label>
                        <input type="text" class="form-control" id="model" name="model">
                    </div>
                    <div class="col-md-6">
                        <label for="user" class="form-label">Marca</label>
                        <input type="text" class="form-control" name="brand" id="brand" aria-describedby="brand">
                    </div>
                    <div class="col-md-6">
                        <label for="user" class="form-label">Placa</label>
                        <input type="text" class="form-control" name="board" id="board" aria-describedby="board">
                    </div>
                    <div class="col-md-6">
                        <label for="user" class="form-label">Ano</label>
                        <select id="inputYear" class="form-select" name="year" id="year">
                            <?php
                                $year = date('Y');
                                for($i = 0;$i < 40; $i++){
                                    echo "<option name='$year' id='$year'>$year</option>";
                                    $year = $year - 1;
                                }
                            ?>
                        </select>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="formFile" class="form-label">Selecione uma imagem</label>
                        <input class="form-control" type="file" id="imgCar" name="imgCar" accept=".png,.jpg,.jpeg">
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                        <button type="submit" class="btn btn-dark col-12 col-md-8">Cadastrar</button>
                    </div>
                </form>
            </div>
        </main>
        <div class="container">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                    <p class="col-md-4 mb-0 text-muted">© 2021 Natã Vitoriano</p>
                    <ul class="nav col-md-4 justify-content-end">
                        <li class="nav-item"><a href="./home.php" class="nav-link px-2 text-muted active" aria-current="page">Home</a></li>
                        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Cadastrar</a></li>
                        <li class="nav-item"><a href="./list.php" class="nav-link px-2 text-muted">Lista de Veículos</a></li>
                    </ul>    
            </footer>
        </div> 
    </div>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>