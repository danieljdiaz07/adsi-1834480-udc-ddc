<?php
include_once('sesiones.php');

$dbname='encuestaudc_ddc';
$user='root';
$pass='';
$dsn="mysql:host=localhost;dbname=$dbname";

//ESTABLECER CONEXIÓN

$conn=new PDO($dsn,$user,$pass);
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


//VALIDACION DE DATOS

if( $_POST['identificacion']== null or $_POST['identificacion']=='' or $_POST['nombre']== null or $_POST['nombre']=='' 
or $_POST['apellido']== null or $_POST['apellido']=='' or $_POST['email']== null or $_POST['email']=='' 
or $_POST['direccion']== null or $_POST['direccion']==''or $_POST['genero']== null or $_POST['genero']==''
or $_POST['telefono']== null or $_POST['telefono']=='' or $_POST['estadocivil']== null or $_POST['estadocivil']== '' 
or $_POST['actividaddelpapa']== null or $_POST['actividaddelpapa']=='' or $_POST['actividaddelamama']== null or $_POST['actividaddelamama']=='' 
or $_POST['nacimiento']== null or $_POST['nacimiento']=='' or $_POST['nivelacademico_papa']== null or $_POST['nivelacademico_papa']=='' 
or $_POST['nivelacademico_mama']== null or $_POST['nivelacademico_mama']=='' or $_POST['tipodeinstitucion']== null or $_POST['tipodeinstitucion']==''
or $_POST['tipodevivienda']== null or $_POST['tipodevivienda']==''or $_POST['region']== null or $_POST['region']==''
or $_POST['carrera']== null or $_POST['carrera']=='' or $_POST['tiempo_de_graduado']== null or $_POST['tiempo_de_graduado']=='' 
or $_POST['ingresoeconomico']== null or $_POST['ingresoeconomico']=='' or $_POST['asignaturas_matriculadas']== null or $_POST['asignaturas_matriculadas']==''
or $_POST['calificatucarrera']== null or $_POST['calificatucarrera']==''  ){



    echo '<div class="alert alert-danger" role="alert"> Campos vacios modifique información</div> ';
                              
}else{
    $identificacion=$_POST['identificacion'];
     $nombre = $_POST['nombre'];
     $apellido = $_POST['apellido'];
     $email = $_POST['email'];
     $direccion = $_POST['direccion'];
     $id_genero = $_POST['genero'];
     $telefono = $_POST['telefono'];
     $id_estadocivil = $_POST['estadocivil'];
     $actividaddelpapa = $_POST['actividaddelpapa'];
     $actividaddelamama = $_POST['actividaddelamama'];
     $nacimiento= $_POST['nacimiento'];
     $id_nivelacademicoPapa = $_POST['nivelacademico_papa'];   
     $id_nivelacademicoMama = $_POST['nivelacademico_mama'];    
     $tipodeinstitucion = $_POST['tipodeinstitucion'];
     $tipodevivienda = $_POST['tipodevivienda'];
     $id_region=$_POST['region'];
     $carrera = $_POST['carrera'];
     $tiempo_de_graduado = $_POST['tiempo_de_graduado'];
     $id_ingresoeconomico = $_POST['ingresoeconomico'];
     $asignaturas_matriculadas = $_POST['asignaturas_matriculadas'];
     $calificatucarrera = $_POST['calificatucarrera'];

        //INSERTAR REGISTROS
$sql="INSERT INTO encuesta_sjba (identificacion,nombre,apellido,email,direccion,telefono,actividaddelpapa,actividaddelamama,id_estadocivil,id_genero,nacimiento,id_nivelacademicoPapa,id_nivelacademicoMama,tipodeinstitucion,id_tipodevivienda,id_region,carrera,tiempo_de_graduado,id_ingresoeconomico,asignaturas_matriculadas,calificatucarrera) 
VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
$stm=$conn->prepare($sql)->execute(array($identificacion,$nombre,$apellido,$email,$direccion,$telefono,$actividaddelpapa,$actividaddelamama,$id_estadocivil,$id_genero,$nacimiento,$id_nivelacademicoPapa,$id_nivelacademicoMama ,$tipodeinstitucion ,$tipodevivienda,$id_region ,$carrera,$tiempo_de_graduado,$id_ingresoeconomico,$asignaturas_matriculadas,$calificatucarrera));


}
?>