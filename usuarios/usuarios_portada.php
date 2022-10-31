


<?php
    include_once "conexion.php";
    $sentencia = $bd -> query("select * from cliente");
    $cliente = $sentencia->fetchAll(PDO::FETCH_OBJ);
    //print_r($persona);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
<title>Multiusuarios PHP MySQL: Niveles de Usuarios</title>
		
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<script src="../js/jquery-1.12.4-jquery.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<style type="text/css">
	.login-form {
		width: 340px;
    	margin: 20px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
        
    }
	.fondo{
	background-image: url("img1/img-1.jpg");
    background-repeat: no-repeat;
    background-size: cover;

	}
        

    
</style>
</head>
	<body class="fondo">
<?php include("../header.php");?>
	
	<div class="wrapper">
	
	<div class="container">
			
		<div class="col-lg-12">
		 
			<center>
				<h1>Rol usuario</h1>
				
				<h3>
				<?php
				
				session_start();

				if(!isset($_SESSION['usuarios_login']))	
				{
					header("location: ../index.php");
				}

				if(isset($_SESSION['admin_login']))	
				{
					header("location: ../admin/admin_portada.php");
				}

				if(isset($_SESSION['personal_login']))	
				{
					header("location: ../personal/personal_portada.php");
				}

				if(isset($_SESSION['user_login']))
				{
				?>
					Bienvenidos,
				<?php
						echo $_SESSION['usuarios_login'];
				}
				?>
				</h3>
			</center>

			

			<a href="../cerrar_sesion.php"><button class="btn btn-danger text-left"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Cerrar Sesion</button></a>
            <hr>
			
			<div class="card">
                <div class="card-header">
                    <h5>LISTA DE CLIENTES</h5>
                </div>
                <div class="p-4">
                    <table class="table align-middle display table-bordered" id="myTable">
                        <thead>
                            <tr>
                                <th scope="col">Codigo</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellidos</th>
                                <th scope="col">Telefono</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php 
                                foreach ($cliente as $dato){ 
                            ?>

                            <tr>
                                <td scope="row"><?php echo $dato->idcliente; ?></td>
                                <td><?php echo $dato->nombre; ?></td>
                                <td><?php echo $dato->apellidos; ?></td>
                                <td><?php echo $dato->telefono; ?></td>
                                
                            </tr>

                            <?php 
                                }
                            ?>

                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    
                
            </div>
        </div>
    </div>
</div>


<script>
var dataTable = new DataTable("#myTable");

</script> 
