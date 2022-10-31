<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <title>Document</title>

<a href="../cerrar_sesion.php"><button class="btn btn-danger text-left"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Cerrar Sesion</button></a>


<?php
    if(!isset($_GET['idcliente'])){
        header('Location: cliente.php?mensaje=error');
        exit();
    }

    include_once 'conexion.php';
    $cliente = $_GET['idcliente'];

    $sentencia = $bd->prepare("select * from cliente where idcliente = ?;");
    $sentencia->execute([$cliente]);
    $cliente = $sentencia->fetch(PDO::FETCH_OBJ);
    //print_r($persona);
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h4>                    Editar datos:
</h4>
                </div>
                <form class="p-4" method="POST" action="editarproceso.php">
                    <div class="mb-3">
                        <label class="form-label"><h5>nombre: </h5></label>
                        <input type="text" class="form-control" name="nombre" required 
                        value="<?php echo $cliente->nombre; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><h5>apellidos</h5></label>
                        <input type="text" class="form-control" name="apellidos" autofocus required
                        value="<?php echo $cliente->apellidos; ?>">
                    </div>
      

                    <div class="mb-3">
                        <label class="form-label"><h5>telefono: </h5></label>
                        <input type="number" class="form-control" name="telefono" autofocus required
                        value="<?php echo $cliente->telefono; ?>">
                    </div>



                    <div class="d-grid">
                        <input type="hidden" name="idcliente" value="<?php echo $cliente->idcliente; ?>">
                        <input type="submit" class="btn btn-primary" value="Actualizar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

