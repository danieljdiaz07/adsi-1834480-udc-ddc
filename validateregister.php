
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css"> 
  <title>Document</title>
</head>
<body>
<?php

$dbname='encuestaudc_ddc';
$user='root';
$pass='';
$dsn="mysql:host=localhost;dbname=$dbname";

//ESTABLECER CONEXIÓN

$conn=new PDO($dsn,$user,$pass);
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


if($_POST['identificacion'] == null or $_POST['identificacion'] == '' or  $_POST['inputPassword'] == null or $_POST['inputPassword'] == ''  or  $_POST['nombre'] == null or $_POST['nombre'] == ''
or  $_POST['apellido'] == null or $_POST['apellido'] == ''){
 
 echo '<div class="alert alert-danger" role="alert"> Campos vacios modifique información</div> 
 <a class="btn btn-info" href="register.php">Volver</a>';

}else{

 $identificacion=$_POST['identificacion'];

 $inputPassword=$_POST['inputPassword'];
 $nombre = $_POST['nombre'];
 $apellido = $_POST['apellido'];


 
//INSERTAR REGISTROS

$sql="INSERT INTO login_ddc (identificacion,inputPassword,nombre,apellido) VALUES (?,?,?,?)";
$stm=$conn->prepare($sql)->execute(array($identificacion,$inputPassword,$nombre,$apellido));

}



?>
</body>
</html>
