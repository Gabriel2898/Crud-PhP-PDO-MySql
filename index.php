<?php 
include 'modelo/conexion.php';
$sentencia=$bd->query("SELECT * from alumno;");
$alumnos=$sentencia->fetchAll(PDO::FETCH_OBJ);
//print_r($alumnos);
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<center>
		<h3>lista de alumnos</h3>
		<table>
			<tr>
				<td>Codigo</td>
				<td>Apellido Paterno</td>
				<td>Apellido MAterno</td>
				<td>Nombre</td>
				<td>Examen Parcial</td>
				<td>Examen Final </td>
				<td>Promedio </td>
        <td colspan="3"><center> Accion</center></td>
			</tr>
			<?php
				foreach ($alumnos as $dato ) {
					 ?>
           
					 <tr>
				<td><?php echo $dato->id_alumno;?></td>
				<td><?php echo $dato->apellido_paterno;?></td>
				<td><?php echo $dato->apellido_materno;?></td>
				<td><?php echo $dato->nombre;?></td>
				<td><?php echo $dato->ex_parcial;?></td>
				<td><?php echo $dato->ex_final;?></td>
				<td><?php echo ($dato->ex_final + $dato->ex_parcial)/2;?></td>
        <td><a href="editar.php?id=<?php echo $dato->id_alumno; ?>">Editar</a></td>
        <td><a href="eliminar.php?id=<?php echo $dato->id_alumno; ?>">Eliminar</a></td>
			</tr>
					 <?php
				}

			?>
		</table>
    <h3>ingresar </h3>
    <form action="insertar.php" method="POST">
        <table>
          <tr>
            <td>Apellido Paterno</td>
            <td><input type="text" name="txapellidopaterno" id=""></td>
          </tr>
          <tr>
            <td>Apellido Materno</td>
            <td><input type="text" name="txtapellidomaterno" id=""></td>
          </tr>
          <tr>
            <td>Nombre</td>
            <td><input type="text" name="txtnombre" id=""></td>
          </tr>
          <tr>
            <td>Nota 1</td>
            <td><input type="text" name="txtparcial" id=""></td>
          </tr>
          <tr>
            <td>nota final</td>
            <td><input type="text" name="txtfinal" id=""></td>
          </tr>
          <input type="hidden" name="oculto" value="1">
          <tr>
            <td><input type="reset" name="" id=""></td>
            <td><input type="submit" value="Ingresar" id=""></td>
          </tr>
        </table>
    </form>

	</center>
</body>
</html>