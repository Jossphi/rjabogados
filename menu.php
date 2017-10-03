<!DOCTYPE html>
<html land="es">
    <head>
        <title>
            Menu
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1,maximum-sacle=1,minium-scale=1">
        <link rel="stylesheet" href="estilos/estilosmenu.css">
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="css/estilostabla.css"  media="screen,projection"/>
    </head>
    
    <body>
        <header>
            <input type="checkbox" id="btn-menu">
            <nav class="menu">
                <ul>
                    <li><a href="registro.html">Legajo</a></li>
                    <li><a href="">Empleado</a></li>
                    <li><a href="">Contrato</a></li>
                    <li><a href="">Control</a></li>
                    <li><a href="">Planilla</a></li>
                    <li><a href="">Repostes</a></li>
                    <li><a href="">Usuario</a></li>
                </ul>
            </nav>
            <div class="tabla">
                    <table class="striped responsive-table">
                    <thead>
                      <tr>
                          <th>ID</th>
                          <th>Nombre</th>
                          <th>Apellido paterno</th>
                          <th>Apellido materno</th>
                          <th>DNI</th>
                          <th>Estado Civil</th>
                          <th>Telefono</th>
                          <th>fecha</th>
                          <th>Pais</th>
                          <th>Region</th>
                          <th>Ciudad</th>
                          <th>Eliminar</th>
                      </tr>
                    </thead>

                    <tbody>
                    <?php
                        include("conexion.php");
                        $query="SELECT * FROM postulantes";
                        $resultado= $mysqli->query($query);
                        while($row=$resultado->fetch_assoc()){
                    ?>
                    <tr>
                        <td><?php echo $row['idempleado'];?></td>
                        <td><?php echo $row['nombre'];?></td>
                        <td><?php echo $row['apellidopat'];?></td>
                        <td><?php echo $row['apellidomat'];?></td>
                        <td><?php echo $row['DNI'];?></td>
                        <td><?php echo $row['estadocivil'];?></td>
                        <td><?php echo $row['telefono'];?></td>
                        <td><?php echo $row['nacimiento'];?></td>
                        <td><?php echo $row['pais'];?></td>
                        <td><?php echo $row['region'];?></td>
                        <td><?php echo $row['ciudad'];?></td>
                        <td><a href="#">Eliminar</a></td>
                      </tr>
                    <?php    
                        }
                    ?>

                    </tbody>
                  </table>
                  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
                  <script type="text/javascript" src="js/materialize.min.js"></script>
            </div>
        </header>
    </body>
</html>