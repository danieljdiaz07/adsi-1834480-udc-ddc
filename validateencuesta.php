<?php
include_once('sesiones.php'); ?>
     <?php
    try{
        $dbname='encuestaudc_ddc';
        $user='root';
        $pass='';
        $dsn="mysql:host=localhost;dbname=$dbname";

        //ESTABLECER CONEXIÓN

        $conn=new PDO($dsn,$user,$pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
        
        // CONSULTA DE REGISTROS 

        $sql2="SELECT * FROM  encuesta_ddc WHERE identificacion = ? ";
		$stm2=$conn->prepare($sql2);
        $stm2->execute(array($_SESSION['identificacion']));   
       // $_SESSION['identificacion_wjbt'];

       if( $stm2->rowCount() > 0) {
      header('Location:tables.php');
        
    } else { 

        include_once('encuesta.php');
    
    
        
    }
        
     }catch (PDOException $e){

      echo"Error:".$e->getMessage();
 }


?>




