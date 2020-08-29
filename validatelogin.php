<?php
 session_start();

if($_POST['identificacion'] == null or $_POST['identificacion'] == '' or $_POST['inputPassword'] == null or $_POST['inputPassword'] == ''){
  
	echo"Campos vacios";

}else{

     try {
		$usuario=$_POST['identificacion'];
		$inputPassword=$_POST['inputPassword'];

		$dbname='encuestaudc_sjba';
		$user='root';
		$pass='';
		$dsn="mysql:host=localhost;dbname=$dbname";

	   //Establecer conexion

		$dbh= new PDO ($dsn,$user,$pass);
		$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		//Consultas de registros

		$sql="SELECT * FROM login_sjba WHERE   ";
		$stm=$dbh->prepare($sql);
		$stm->execute(array($usuario,$inputPassword));

		if ($stm->rowCount()>0) {
			$_SESSION['udec'] = 'ddc';
			$rows=$stm->fetchALL(PDO::FETCH_OBJ);
			foreach ($rows as $row){
				$_SESSION['nombre'] = $row->nombre;
				$_SESSION['identificacion'] = $row->identificacion;
				$_SESSION['id'] = $row->id;
                $_SESSION['apellido'] = $row->apellido;

				$_SESSION['id_genero'] = $row->id_genero;
			}
			

			header('Location:contenidoindex.php');
		}else {
			$msg='Su correo o Contraseña son incorrectos por favor verifique informacion';
			header('Location:login.php');
		}

	}catch (PDOException $e) {
		echo "Connection failed:".$e->getMessage();
} 
}


?>

