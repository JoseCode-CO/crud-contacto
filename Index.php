<?php 
  include_once('Conexion.php');

  $Consulta = 'SELECT * FROM detalles';
  $P_CONSULTA = $pdo->prepare($Consulta);
  $P_CONSULTA -> execute();
  $Resultado = $P_CONSULTA-> fetchAll();

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Registro</title>
  </head>
  <body>
    <h1></h1>
    <div class="container mx-auto" style="width: 2000px;">
        <div class="row">
           <div class="col">
              <table class="table table-striped mt-2">
                 <thead class="thead-dark">
                   <tr>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">APELLIDO</th>
                        <th scope="col">EDAD</th>
                        <th scope="col">PAIS</th>
                        <th scope="col">CIUDAD</th>
                        <th scope="col">FECHA REGISTRO</th>
                        <th scope="col"></th>
                  </tr>
                 </thead>
                 <tbody>
                  <?php foreach($Resultado as $dato): ?>
                   <tr>
                        
                        <td><?php echo$dato['nombre']?></td>
                        <td><?php echo$dato['apellido']?></td>
                        <td><?php echo$dato['edad']?></td>
                        <td><?php echo$dato['pais']?></td>
                        <td><?php echo$dato['ciudad']?></td>
                        <td><?php echo$dato['fecha']?></td>
                        <td>
                        <a href="Eliminar.php?id=<?php echo$dato['id']?>" class = "float-right ml-2">
                        <i class="far fa-trash-alt "></i></a>
                        <a href="FormularioEditar.php?id=<?php  echo $dato['id']?>" class = "float-right">
                        <i class="fas fa-edit"></i>
                        </a>
                        </td>
                    
                  </tr>
                 <?php endforeach  //Cerramos el arreglo ?>
                 </tbody>
              </table>
            </div>
         </div>
    </div>
       

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://kit.fontawesome.com/e1f689b90b.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>