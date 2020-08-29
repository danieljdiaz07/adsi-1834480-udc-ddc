<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6"> 
  <title> PORTAL UDC</title>
   <link href="./bootstrap/css/bootstrap.min.css  " rel="stylesheet">
</head>
<body>


  <table class="table" >
<thead class="thead" style="background-color:#244ec9; " >
    <tr>
      <th scope="col" style="color: white">Datos</th>
      <th scope="col" style="color: white">Registros</th>
     
    </tr>
  </thead>
  <tbody>
<?php

$dbname='encuestaudc_ddc';
$user='root';
$pass='';
$dsn="mysql:host=localhost;dbname=$dbname";

//ESTABLECER CONEXIÓN

$conn=new PDO($dsn,$user,$pass);
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

 $sql="SELECT * FROM encuesta_ddc WHERE identificacion= ?";
 $stm=$conn->prepare($sql)->execute(array($identificacion));
  ?>
  <?php
 

 $rows=$stm->fetchAll(PDO::FETCH_OBJ);
 foreach($rows as $row){
  $row->identificacion; 
  $row->nombre;
  $row->apellido;
  $row->email;
  $row->telefono;
  $row->direccion;
  $row->actividaddelpapa;
  $row->actividaddelamama;
  $row->estadocivil;
  $row->genero;
  $row->nacimiento;
  $row->nivelacademico_papa;
  $row->nivelacademico_mama;
  $row->tipodeinstitucion;
  $row->tipodevivienda;
  $row->region;
  $row->carrera;
  $row->tiempo_de_graduado;
  $row->ingresoeconomico;
  $row->calificatucarrera;
  $row->asignaturas_matriculadas;

  echo "<tr>
      <th scope='row'>Identificación</th>
    <td>$row->identificacion </td>
    </tr>

    <tr>
      <th scope='row'>Nombre</th>
      <td>$row->nombre</td> 
    </tr>

    <tr>
      <th scope='row'>Apellido</th>
      <td>$row->apellido</td>  
    </tr>

    <tr>
      <th scope='row'>Correo</th>
      <td>$row->email</td>  
    </tr>

    <tr>
      <th scope='row'>Teléfono</th>
      <td>$row->telefono </td>  
    </tr>

    <tr>
      <th scope='row'>Dirección</th>
      <td>$row->direccion</td>    
    </tr>

    <tr>
      <th scope='row'>Fecha de Nacimiento</th>
      <td>$row->nacimiento </td>
    </tr>

    <tr>
      <th scope='row'>Actividad Económica del Papá</th>
      <td>$row->nivelacademico_papa </td>    
    </tr>

    <tr>
      <th scope='row'>Actividad Económica de la Mamá</th>
      <td>$row->nivelacademico_mama </td>    
    </tr>

    <tr>
      <th scope='row'>Estado Civil</th>
      <td> $row->estadocivil</td>   
    </tr>

     <tr>
      <th scope='row'>Género</th>
      <td>$row->genero </td>   
    </tr>

     <tr>
      <th scope='row'>Nivel acádemico del Papá</th>
      <td>$row->nivelacademico_papa </td>  
    </tr>

     <tr>
      <th scope='row'Nivel acádemico de la Mamá</th>
      <td> $row->nivelacademico_mama </td>  
    </tr>

     <tr>
      <th scope='row'>Tipo de Institución</th>
      <td>$row->tipodeinstitucion </td>   
    </tr>

    <tr>
      <th scope='row'>Tipo de Vivienda</th>
      <td>$row->tipodevivienda</td>   
    </tr>

    <tr>
      <th scope='row'>Zona de Residencia</th>
      <td>$row->region</td>   
    </tr>

    <tr>
      <th scope='row'>Carrera</th>
      <td>$row->carrera</td>   
    </tr>

    <tr>
      <th scope='row'>Año de graduado de Bachiller</th>
      <td>$row->tiempo_de_graduado</td>   
    </tr>

    <tr>
      <th scope='row'>Ingreso Económico</th>
      <td>$row->ingresoeconomico</td>   
    </tr>

    <tr>
      <th scope='row'>Calificación de la Carrera</th>
      <td>$row->calificatucarrera</td>   
    </tr>

    <tr>
      <th scope='row'>Asignaturas Matriculadas</th>
      <td>$row->asignaturas_matriculadas</td>   
    </tr> 

   

  </tbody>
</table>";


 }

  
   }else {
    echo "No se encontraron registros";
   }
  
 ?>
  </div>
            </div>
          </div>

        </div>
</body>
</html>
<th >Identificación</th>       
                    <th >Nombre</th>
                    <th >Apellido</th>
                    <th >Correo</th>
                    <th >Teléfono</th>
                    <th >Dirección</th>