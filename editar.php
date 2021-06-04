<?php
if(!isset($_GET['id'])){
  exit();
}
include 'modelo/conexion.php';
$id=$_GET['id'];

$sentencia=$bd->prepare("SELECT * FROM alumno WHERE id_alumno=?;" );
$sentencia->execute([$id]);
$persona=$sentencia->fetch(PDO::FETCH_OBJ);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar</title>
</head>
<body>
  <center>
    <h3>Editar almuno</h3>
    <form action="editar_alumno.php" method="POST">
      <table>
        <tr>
        <td>Apellido Paterno</td>
        <td><input type="text" name="txtapellidopaterno" value="<?php echo $persona->apellido_paterno; ?>"></td>
        </tr>
        <tr>
        <td>Apellido Materno</td>
        <td><input type="text" name="txtapellidomaterno" value="<?php echo $persona->apellido_materno; ?>"></td>
        </tr>
        <tr>
        <td>Nombre</td>
        <td><input type="text" name="txtnombre" value="<?php echo $persona->nombre;?>"></td>
        </tr>
        <tr>
        <td>Nota Parcial</td>
        <td><input type="text" name="txtparcial" value="<?php echo $persona->ex_parcial;?>"></td>
        </tr>
        <tr>
        <td>Final</td>
        <td><input type="text" name="txtfinal" value="<?php echo $persona->ex_final;?>"></td>
        </tr>
        <tr>
        <input type="hidden" name="oculto" >
        <input type="hidden" name="id2" value="<?php echo $persona->id_alumno;?>" >
        <td colspan="2"><input type="submit" value="Editar"></td>
        </tr>
      </table>
    </form>
  </center>
</body>
</html>