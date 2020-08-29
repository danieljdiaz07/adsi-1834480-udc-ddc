 <!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="./font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <title>Portal UDC</title>
</head>
<body>
  <?php

include_once('sesiones.php');?>

<?php
if ($_GET['identificacion']== null or $_GET['identificacion']=='' or $_GET['nombre']== null or $_GET['nombre']==''
or $_GET['apellido']== null or $_GET['apellido']=='' or $_GET['email']== null or $_GET['email']=='' 
or $_GET['direccion']== null or $_GET['direccion']==''or $_GET['genero']== null or $_GET['genero']==''
or $_GET['telefono']== null or $_GET['telefono']=='' or $_GET['estadocivil']== null or $_GET['estadocivil']== '' 
or $_GET['actividaddelpapa']== null or $_GET['actividaddelpapa']==''
or $_GET['actividaddelamama']== null or $_GET['actividaddelamama']==''
or $_GET['nacimiento']== null or $_GET['nacimiento']=='' 
or $_GET['nivelacademico_papa']== null or $_GET['nivelacademico_papa']=='' 
or $_GET['nivelacademico_mama']== null or $_GET['nivelacademico_mama']==''
or $_GET['tipodeinstitucion']== null or $_GET['tipodeinstitucion']==''
or $_GET['tipodevivienda']== null or $_GET['tipodevivienda']==''or $_GET['region']== null or $_GET['region']==''
or $_GET['carrera']== null or $_GET['carrera']=='' 
or $_GET['tiempo_de_graduado']== null or $_GET['tiempo_de_graduado']=='' 
or $_GET['id_ingresoeconomico']== null or $_POST['id_ingresoeconomico']==''
or $_GET['asignaturas_matriculadas']== null or $_GET['asignaturas_matriculadas']==''
or $_GET['calificatucarrera']== null or $_GET['calificatucarrera']=='' ){

  echo '  <div class="card-body">
              <div class="table-responsive"> 
              <div class=" dataTables_length" id="dataTable_length "> 
               <div class ="alert alert-danger" role="alert">Campos vacios verifique informacion </div>

              <hr>

              </div>

              <div class=" dataTables_length" id="dataTable_length "><a href="tables.php" class"btn btn-success "> Volver </a> </div>  ';

} else {



   $identificacion=$_GET['identificacion'];
   $nombre = $_GET['nombre'];
   $apellido = $_GET['apellido'];
   $email = $_GET['email'];
   $direccion = $_GET['direccion'];
   $id_genero = $_GET['genero'];
   $telefono = $_GET['telefono'];
   $id_estadocivil = $_GET['estadocivil'];
   $actividaddelpapa = $_GET['actividaddelpapa'];
   $actividaddelamama = $_GET['actividaddelamama'];
   $nacimiento= $_GET['nacimiento'];
   $id_nivelacademicoPapa = $_GET['nivelacademico_papa'];   
   $id_nivelacademicoMama = $_GET['nivelacademico_mama'];    
   $tipodeinstitucion = $_GET['tipodeinstitucion'];
   $tipodevivienda = $_GET['tipodevivienda'];
   $id_region=$_GET['region'];
   $carrera = $_GET['carrera'];
   $tiempo_de_graduado = $_GET['tiempo_de_graduado'];
   $id_ingresoeconomico =$_GET['id_ingresoeconomico'];
   $asignaturas_matriculadas = $_GET['asignaturas_matriculadas'];
   $calificatucarrera = $_GET['calificatucarrera'];

try {

  $dbname='encuestaudc_ddc';
    $user='root';
    $pass='';
    $dsn="mysql:host=localhost;dbname=$dbname";

    //ESTABLECER CONEXIÓN

    $conn=new PDO($dsn,$user,$pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

     $sql0 = "SELECT * FROM genero_ddc WHERE genero = ?";
     $stm0 = $conn->prepare($sql0);
     $stm0->execute($genero);

     $rows0 = $stm0->fetchAll(PDO::FETCH_OBJ);
     foreach ($rows0 as $row0) {
     $row0->id;
     $row0->genero; }                               
                                                                                                                     
    $sql11 = "SELECT * FROM region_ddc WHERE region = ?";
    $stm2 = $conn->prepare($sql11);
    $stm2->execute($region);

     $rows2 = $stm2->fetchAll(PDO::FETCH_OBJ);
     foreach ($rows2 as $row2) {
     $row2->id;
     $row2->region; }                                      
                                     
    $sql12 = "SELECT * FROM estadocivil_ddc WHERE estadocivil = ?";
    $stm3 = $conn->prepare($sql12);
    $stm3->execute($estadocivil);

    $rows3 = $stm3->fetchAll(PDO::FETCH_OBJ);
    foreach ($rows3 as $row3) {
    $row3->id;
    $row3->estadocivil;  }

    $sql13 = "SELECT * FROM tipodeinstitucion_ddc WHERE tipodeinstitucion = ?";
    $stm4 = $conn->prepare($sql13);
    $stm4->execute($tipodeinstitucion);

     $rows4 = $stm4->fetchAll(PDO::FETCH_OBJ);
    foreach ($rows4 as $row4) {
    $row4->id;
    $row4->tipodeinstitucion;  }

    $sql14 = "SELECT * FROM tiempo_de_graduado_ddc WHERE tiempo_de_graduado = ?";
    $stm5 = $conn->prepare($sql14);
    $stm5->execute($tiempo_de_graduado);
    
     $rows5 = $stm5->fetchAll(PDO::FETCH_OBJ);
     foreach ($rows5 as $row5) {
     $row5->id;
     $row5->tiempo_de_graduado; }

    $sql15 = "SELECT * FROM  nivelacademicopapa_ddc WHERE nivelacademico_papa = ?";
    $stm6 = $conn->prepare($sql15);
    $stm6->execute($nivelacademico_papa);
   
   $rows6 = $stm6->fetchAll(PDO::FETCH_OBJ);
     foreach ($rows6 as $row6) {
     $row6->id;
     $row6->nivelacademico_papa; }

    $sql16 = "SELECT * FROM  nivelacademicomama_ddc WHERE nivelacademico_mama = ?";
    $stm7 = $conn->prepare($sql16);
    $stm7->execute($nivelacademico_mama);
  
   $rows7 = $stm7->fetchAll(PDO::FETCH_OBJ);
     foreach ($rows7 as $row7) {
     $row7->id;
     $row7->nivelacademico_mama; }

     $sql16 = "SELECT * FROM  tipodevivienda_ddc WHERE tipodevivienda = ?";
    $stm8 = $conn->prepare($sql16);
    $stm8->execute($tipodevivienda);

     $rows8 = $stm8->fetchAll(PDO::FETCH_OBJ);
     foreach ($rows8 as $row8) {
     $row8->id;
     $row8->tipodevivienda; }

    $sql17 = "SELECT * FROM  calificatucarrera_ddc WHERE calificatucarrera = ?";
    $stm9 = $conn->prepare($sql17);
    $stm9->execute($calificatucarrera);

    $rows9 = $stm9->fetchAll(PDO::FETCH_OBJ);
     foreach ($rows9 as $row9) {
     $row9->id;
     $row9->calificatucarrera; }

      $sql=" UPDATE encuesta_ddc SET 
       
       nombre=?,
        apellido=?,
        email=? ,
        direccion=?,
        id_genero=? ,
        telefono=? ,
        id_estadocivil=? ,
        actividaddelpapa=? ,
        actividaddelamama=? ,
        nacimiento=? ,
        id_nivelacademicoPapa=? ,
        id_nivelacademicoMama=? ,
        tipodeinstitucion=? ,
        tipodevivienda=?,
        id_region=? ,
        carrera=?, 
        tiempo_de_graduado=? ,
        id_ingresoeconomico=?,
        asignaturas_matriculadas=? ,
        calificatucarrera=? WHERE identificacion =? ";

     $stm=$conn->prepare($sql)->execute(array($identificacion,$nombre,$apellido,$email,
      $direccion,$row2->id,$telefono,$row3->id,$actividaddelpapa,$actividaddelamama,
      $nacimiento,$row6->id,$row7->id,$row4->id,$row8->id,$row2->id,$carrera,$row5->id,
       $asignaturas_matriculadas,$row9->id));

     $msg='Los datos se han guardado con exito!';

     header('location:tables.php?err=msg');

} catch (PDOException $e) {
    echo "Connection failed:".$e->getMessage();
} 

}

?>
       
</body>
</html>


      

   