<?php
 /*session_start();
try {
	if($_POST['usuario'] == null or $_POST['usuario'] == '' or $_POST['inputPassword'] == null or $_POST['inputPassword'] == ''){
		
		
	echo"Campos vacios";
	}else{

		$usuario=$_POST['usuario'];
		$inputPassword=$_POST['inputPassword'];

		$dbname='encuestaudc_sjba';
		$user='root';
		$pass='';
		$dsn="mysql:host=localhost;dbname=$dbname";

	   //Establecer conexion

		$dbh= new PDO ($dsn,$user,$pass);
		$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		//Consultas de registros

		$sql="SELECT * FROM loginadmi_sjba WHERE usuario=? AND inputPassword=? ";
		$stm=$dbh->prepare($sql);
		$stm->execute(array($usuario,$inputPassword));

		if ($stm->rowCount()>0) {
			$_SESSION['udecadmi'] = 'sjba';
			$row=$stm->fetch(PDO::FETCH_OBJ);
			foreach ($rows as $row){
				$_SESSION['nombre'] = $row->nombre;
				$_SESSION['identificacion'] = $row->identificacion;
				$_SESSION['id'] = $row->id;
			
			}

			header('Location:contenidoindexadmi.php');
		}else {
			header('Location:loginadmi.php');
		}

	}
} catch (PDOException $e) {
	echo "Connection failed:".$e->getMessage();
}*/


 session_start();

if($_POST['identificacion'] == null or $_POST['identificacion'] == '' or $_POST['inputPassword'] == null or $_POST['inputPassword'] == ''){
  
	echo"Campos vacios";

}else{

     try {
		$identificacion=$_POST['identificacion'];
		$inputPassword=$_POST['inputPassword'];

		$dbname='encuestaudc_ddc';
		$user='root';
		$pass='';
		$dsn="mysql:host=localhost;dbname=$dbname";

	   //Establecer conexion

		$dbh= new PDO ($dsn,$user,$pass);
		$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		//Consultas de registros

		$sql="SELECT * FROM loginadmi_ddc WHERE identificacion=? AND inputPassword=? ";
		$stm=$dbh->prepare($sql);
		$stm->execute(array($identificacion,$inputPassword));

		if ($stm->rowCount()>0) {
			$_SESSION['udecadmi'] = 'ddc';
			$rows=$stm->fetchALL(PDO::FETCH_OBJ);
			foreach ($rows as $row){
				$_SESSION['nombre'] = $row->nombre;
				$_SESSION['identificacion'] = $row->identificacion;
				$_SESSION['id'] = $row->id;
				$_SESSION['id_genero'] = $row->id_genero;
				
			}
			

			header('Location:contenidoindexadmi.php');
		}else {
			$msg='Su correo o Contraseña son incorrectos por favor verifique informacion';
			header('Location:loginadmi.php');
		}

	}catch (PDOException $e) {
		echo "Connection failed:".$e->getMessage();
} 
}


?>





