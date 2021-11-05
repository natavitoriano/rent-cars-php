<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
    <title>Lista de Veículos</title>
</head>
<body>
    <div>
        <?php
            include '../pages/common-function.php';
            verifyMSGS();
            verifyLogin();
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
                    <a class="nav-link" href="./register.php">Cadastrar</a>
                    <a class="nav-link active" aria-current="page" href="#">Lista de Veículos</a>
                </div>
                </div>
                <div class="me-3">
                <form action="./logout_act.php">
                    <button id="btn-exit"class="btn-exit btn btn-outline-danger" type="submit">Sair</button>
                </form>    
            </div>  
            </div>
        </nav>
        </header>
        <main class="container d-flex flex-column align-items-center">
            <table class="table mt-5 text-center">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Imagem</th>
                        <th>Modelo</th>
                        <th>Marca</th>
                        <th>Placa</th>
                        <th>Ano</th>
                        <th>Disponível</th>
                        <th>Editar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include '../config/conn.inc';
                        $res = $mysqli->query("SELECT * FROM Cars");
                        if($res){
                            if ($res->num_rows > 0) {
                                while($row = $res->fetch_assoc()) {
                                  echo "<tr class='align-middle align-items-center'>";
                                  echo "<td class='ID_Car'>".$row["ID_Car"]. "</td>";
                                  echo "<td class='IMG_Car'><img src='".$row["IMG_Car"]."' alt='Car' class='img-fluid' style='width: 150px; height: 150px;'/></td>";
                                  echo "<td class='Model'>".$row["Model"]. "</td>";
                                  echo "<td class='Brand'>".$row["Brand"]. "</td>";
                                  echo "<td class='Board'>".$row["Board"]. "</td>";
                                  echo "<td class='Year'>".$row["Year"]. "</td>";
                                  if($row["Available"] == 'Sim') echo "<td class='table-success  Available'>".$row["Available"]. "</td>";
                                  else echo "<td class='table-danger Available'>".$row["Available"]. "</td>";
                                  echo "<td><button type='submit' class='btn btn-dark btn-edit' value='".$row["ID_Car"]."' name='btn-edit' data-bs-toggle='modal' data-bs-target='#modal-edit'>
                                    Editar
                                  </button>
                                  </td>";
                                  echo "</tr>";
                                }
                              } else {
                                echo "<tr><td colspan='8'>Não há registros</td></tr>";
                              }
                        }              
                        $mysqli->close();
                    ?>
                </tbody>
            </table>
            <div class="modal fade" id="modal-edit" tabindex="-1" aria-labelledby="modal-edit" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modal-edit">Editar</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                            <div class="modal-body d-flex justify-content-center">
                                <div class="card mt-2 p-5 shadow-lg w-100 h-100">
                                    <form class="row g-3" enctype="multipart/form-data" method="POST" action="list_act.php">
                                        <div class="col-md-6">
                                            <label for="pass" class="form-label">Modelo</label>
                                            <input type="text" class="form-control" id="model" name="up-model">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="user" class="form-label">Marca</label>
                                            <input type="text" class="form-control" name="up-brand" id="brand" aria-describedby="brand">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="user" class="form-label">Placa</label>
                                            <input type="text" class="form-control" name="up-board" id="board" aria-describedby="board">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="user" class="form-label">Ano</label>
                                            <select id="inputYear" class="form-select" name="up-year">
                                                <?php
                                                    $year = date('Y');
                                                    for($i = 0;$i < 40; $i++){
                                                        echo "<option name='$year' id='$year'>$year</option>";
                                                        $year = $year - 1;
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-md-12 mb-5">
                                            <label for="user" class="form-label">Disponível</label>
                                            <select name="up-available" id="available" class="form-select">
                                                <option id="Sim" name="Sim">Sim</option>
                                                <option id="Não" name="Não">Não</option>
                                            </select>
                                            <input type="text" id="id-car" class="id-car" name="up-id-car" style="display: none;"/>
                                        </div>
                                        <div class="col-12 d-flex justify-content-center">
                                            <button type="submit" class="btn btn-dark col-12 col-md-8">Atualizar</button>
                                        </div>
                                        <div class='col-12 d-flex justify-content-end mt-5'>
                                            <button type='button' class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#modal-delete'>Deletar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="modal-delete" tabindex="-1" aria-labelledby="modal-delete" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-delete">Excluir</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="fs-5">Tem certeza que deseja excluir?</p>
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex justify-content-between w-100">
                            <button type="button" class="btn btn-secondary ms-3" data-bs-dismiss="modal">Fechar</button>
                            <form enctype="multipart/form-data" method="POST" action="list_delete_act.php">
                                <input type="text" id="id-car-delete" class="id-car-delete" name="id-car-delete" style="display: none;"/>
                                <button type="submit" class="btn btn-danger">DELETAR</button>
                            </form>     
                        </div>    
                    </div>
                    </div>
                </div>
                </div>
        </main>
        <div class="container">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                    <p class="col-md-4 mb-0 text-muted">© 2021 Natã Vitoriano</p>
                    <ul class="nav col-md-4 justify-content-end">
                        <li class="nav-item"><a href="./home.php" class="nav-link px-2 text-muted active" aria-current="page">Home</a></li>
                        <li class="nav-item"><a href="./register.php" class="nav-link px-2 text-muted">Cadastrar</a></li>
                        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Lista de Veículos</a></li>
                    </ul>    
            </footer>
        </div> 
    </div>
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script>
        $('document').ready(function() {
            $('.btn-edit').click(function() {
                $tr = $(this).closest('tr');
                $('.id-car').val($('.ID_Car',$tr).text());
                $('.id-car-delete').val($('.ID_Car',$tr).text());
                $('#model').val($('.Model', $tr).text());
                $('#brand').val($('.Brand', $tr).text());
                $('#board').val($('.Board', $tr).text());
                $('#inputYear').val($('.Year', $tr).text()).change();
                $('#available').val($('.Available', $tr).text()).change();
            });
        });
    </script>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>