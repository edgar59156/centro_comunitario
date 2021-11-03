<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>

<body>
  
  <h1>Usuarios</h1>
  <a href="usuario.php?accion=new" class="btn btn-primary">Añadir usuario</a>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Usuario</th>
        <th scope="col">Correo</th>
        <th scope="col">Nombre</th>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col">fotografia</th>
        <th scope="col">telefono</th>
        <th scope="col">Modificar</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($datos as $key => $dato) :
      ?>
        <tr>
          <th scope="row"><?php echo $dato['id_usuario'] ?></th>
          <td><?php echo $dato['correo'] ?></td>
          <td><?php echo $dato['nombre'] ?></td>
          <td><?php echo $dato['primer_apellido'] ?></td>
          <td><?php echo $dato['segundo_apellido'] ?></td>
          <td>
            <div class="text-center">
              <img src="../image/usuario/<?php echo $dato['fotografia'] ?>" class="rounded-circle" width="100" height="110">
            </div>
          </td>
          <td><?php echo $dato['telefono'] ?></td>
          <td>
            <ul>
              <i class="btn btn-success bi bi-pencil"><a href="usuario.php?accion=modify&id_usuario=<?php echo $dato['id_usuario']; ?>" style="color: black;">Modificar</a></i>
              <i class="btn btn-danger bi bi-trash-fill"><a href="usuario.php?accion=delete&id_usuario=<?php echo $dato['id_usuario']; ?>" style="color: black;">Eliminar</a></i>
            </ul>
          </td>
        </tr>
      <?php
      endforeach
      ?>
    </tbody>
  </table>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>
