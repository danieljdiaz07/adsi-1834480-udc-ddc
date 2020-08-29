<?php
include_once('sesiones.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
      <meta name="generator" content="Jekyll v3.8.6"> 

  <link href="./bootstrap/css/bootstrap.min.css  " rel="stylesheet">
  <link href="./font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <title>Portal UDC</title>
</head>
<body>
  <?php
include_once("headerynav.php");
?>

<div style="text-align: center;">
  <h2> Bienvenido  <?=$_SESSION['nombre']?> </h2>
  <p> Los datos ingresados en la encuesta se encuentran registrados acá.
  Si necesita actualizar algun dato presione el botón con cuyo nombre.</p>
  <hr class="sidebar-divider my-1">
</div>
<div class="container">

 

<table class="table" >
   
   <button type="button" class="btn btn-outline-secondary" style="margin: 0.5em; " data-toggle="modal" data-target="#exampleModal">Actualizar</button>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header " style="background-color:#244ec9 ">

        <h5 class="modal-title" id="exampleModalLabel" style="color: white; font-family: 'Open Sans Condensed', sans-serif; " >Encuesta Universidad de Cartagena</h5>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"  >
      <form class="user" method="post" action="actualizar.php" >
            <h4> <strong>Sus datos <?=$_SESSION['nombre']?> </strong> </h4>
           
            <hr class="sidebar-divider d-none d-md-block">
            
              
              
              <div class="form-group row">

               <div class="col-md-12">
              <label for="identificacion"> Identificacion</label>
              <input type="text" class="form-control " id="identificacion" name="identificacion" placeholder="Identificacion" readonly="" >
              </div>             
              </div>

              <div class="form-group row">
              <div class="col-md-6">
                  <label for="nombre"> Nombre</label>
                    <input type="text" class="form-control " id="nombre" name="nombre"  placeholder="Escriba su respuesta"  >
                  </div>
                

                
              <div class="col-md-6">
              <label for="apellido"> Apellido</label>
              <input type="text" class="form-control " id="apellido" name="apellido" placeholder="Escriba su respuesta" >
              </div>
              </div>

              <div class="form-group row">
              <div class="col-md-6">
                  <label for="email"> Correo</label>
                    <input type="email" class="form-control " id="email" name="email"  placeholder="Escriba su respuesta">
                  </div>
                

                
                <div class="col-md-6">
                  <label for="nacimiento"> Fecha de nacimiento</label>
                    <input type="date" class="form-control " id="nacimiento" name="nacimiento"  placeholder="Escriba su respuesta">
                  </div>
                  </div>

                  <div class="form-group row">
                  <div class="col-md-6">
                  <label for="direccion">Dirección</label>
                    <input type="text" class="form-control " id="direccion" name="direccion"  placeholder="Escriba su respuesta">
                  </div>
                         
                  <div class="col-md-6">

                  <label for="region"> Zona de residencia</label>
                   
                    <select name="region" class="form-control  ">
                    
                    <option value="LOCALIDAD 1  "> LOCALIDAD 1 - HISTORICA Y DEL CARIBE NORTE</option>
                    <option value="LOCALIDAD 2 ">LOCALIDAD 2 - VIRGEN Y TURISTICA </option>
                    <option value="LOCALIDAD 3 ">LOCALIDAD 3 - INDUSTRIAL DE LA BAHIA </option>
                    </select>
 
                   </div>
                  </div>

                  <div class="form-group row">
                     <div class="col-md-6">                   
                      <label for="genero">Genero </label></br>
                       <select name="genero"  class="form-control">
                         <option name="genero" value="Masculino" >Masculino</option>
                         <option name="genero" value="Femenino" >Femenino</option>
                         
                       </select>
                     </div>

               
                  <div class="col-md-6">
  
                  <label for="telefono">Telefono</label>
                    <input type="text" class="form-control " id="telefono" name="telefono"  placeholder="Escriba su respuesta">
                  
                  </div>
               </div>

                          <div class="form-group row">
                            <div class="col-md-12">
                        <label for="estadocivil">Estado Civil </label></br>
                  <select name="estadocivil"   class="form-control ">
                    <option name="estadocivil" value="Soltero(a)" >Soltero(a)</option>
                    <option name="estadocivil" value="Casado(a)" >Casado(a)</option>
                    <option name="estadocivil" value="Divorciado(a)" >Divorciado(a)</option>
                    <option name="estadocivil" value="Union Libre" >Union Libre</option>
                    <option name="estadocivil" value="Comprometido(a)" >Comprometido(a)</option>
                    <option name="estadocivil" value="Viudo(a)" >Viudo(a)</option>
                 </select>
              </div>
              </div>

               <div class="form-group row">
                 <div class="col-md-6">
                    <label for="tipodeinstitucion"> Tipo de Institución</label>                       
                   <select name="tipodeinstitucion"  class="form-control">
                    <option name="tipodeinstitucion" value="Privada" >Privada</option>
                    <option name="tipodeinstitucion" value="Pública" >Pública</option>
                    <option name="tipodeinstitucion" value="Mixta" >Mixta</option>
                   

                  </select>
                 </div>            
                
                
                  <div class="col-md-6">
                  <label for="tiempo_de_graduado"> ¿Hace cuánto se graduó de BACHILLER?</label>

                        <select name="tiempo_de_graduado" class="form-control">

                        <option name="tiempo_de_graduado" value="2019">2019 </option>
                        <option name="tiempo_de_graduado" value="2018">2018 </option>
                        <option name="tiempo_de_graduado" value="2017">2017 </option>
                        <option name="tiempo_de_graduado" value="2016">2016 </option>
                        <option name="tiempo_de_graduado" value="2015">2015 </option>
                        <option name="tiempo_de_graduado" value="2014">2014 </option>
                        <option name="tiempo_de_graduado" value="2013">2013 </option>
                        <option name="tiempo_de_graduado" value="2012">2012 </option>
                        <option name="tiempo_de_graduado" value="2011">2011 </option>
                        <option name="tiempo_de_graduado" value="2010">2010 </option>
                        <option name="tiempo_de_graduado" value="2009">2009 </option>
                        <option name="tiempo_de_graduado" value="2008">2008 </option>
                        <option name="tiempo_de_graduado" value="2007">2007 </option>
                        <option name="tiempo_de_graduado" value="2006">2006 </option>
                        <option name="tiempo_de_graduado" value="2005">2005 </option>
                        <option name="tiempo_de_graduado" value="2004">2004 </option>
                        <option name="tiempo_de_graduado" value="2003">2003 </option>

                        </select>

                   </div>
                  </div>

                  <div class="form-group row">
                   <div class="col-md-6">
                
                  <label for="actividaddelpapa"> Trabajo del Padre</label>
                    <input type="text" class="form-control " id="actividaddelpapa" name="actividaddelpapa" placeholder="Escriba su respuesta">
                    </div>

                  <div class="col-md-6">
                    <label for="actividaddelamama"> Trabajo de la Madre</label>
                    <input type="text" class="form-control " id="actividaddelamama" name="actividaddelamama" placeholder="Escriba su respuesta">
                  </div>
                  </div>

             <div class="form-group row">
               <div class="col-md-6">
                
                <label for="nivelacademico_papa"> Nivel academico del Padre</label>
                   <select name="nivelacademico_papa"  class="form-control">

                   <option name="nivelacademico_papa" value=" Analfabeta" >Analfabeta</option>
                   <option name="nivelacademico_papa" value=" Basica Primaria" >Básica Primaria</option>
                   <option name="nivelacademico_papa" value="Basica Secundaria" >Básica Secundaria</option>
                   <option name="nivelacademico_papa" value="Bachiller" >Bachiller</option>
                    <option name="nivelacademico_papa" value="Técnico Profesional " >Técnico Profesional </option>
                    <option name="nivelacademico_papa" value="Tecnologo" >Tecnologo</option>
                    <option name="nivelacademico_papa" value="Profesional" >Profesional</option>
                    <option name="nivelacademico_papa" value="Especializacion" >Especializacion</option>
                    <option name="nivelacademico_papa" value="Maestría" >Maestría</option>
                    <option name="nivelacademico_papa" value="Doctorado" >Doctorado</option>

                   </select>
                  </div>

                <div class="col-md-6">
               
                  <label for="nivelacademico_mama"> Nivel academico de la Madre</label>
                   <select name="nivelacademico_mama"  class="form-control">

                   <option name="nivelacademico_mama" value=" Analfabeta" >Analfabeta</option>
                   <option name="nivelacademico_mama" value=" Básica Primaria" >Básica Primaria</option>
                   <option name="nivelacademico_mama" value="Básica Secundaria" >Básica Secundaria</option>
                   <option name="nivelacademico_mama" value="Bachiller" >Bachiller</option>
                    <option name="nivelacademico_mama" value="Técnico Profesional " >Técnico Profesional </option>
                    <option name="nivelacademico_mama" value="Tecnologo" >Tecnologo</option>
                    <option name="nivelacademico_mama" value="Profesional" >Profesional</option>
                    <option name="nivelacademico_mama" value="Especializacion" >Especializacion</option>
                    <option name="nivelacademico_mama" value="Maestría" >Maestría</option>
                    <option name="nivelacademico_mama" value="Doctorado" >Doctorado</option>

                   </select>

                </div>
            </div>


                  <div class="form-group row">
                        <div class="col-md-12">
                          <label for="tipodevivienda"> Tipo de vivienda</label>
                        <select name="tipodevivienda"  class="form-control">
                          <option name="tipodevivienda" value="Propia" >Propia</option>
                          <option name="tipodevivienda" value="Alquilada" >Alquilada</option>
                          <option name="tipodevivienda" value="Familiar" >Familiar</option>
                          
                        </select>
                    </div>
                    </div>

            <div class="form-group row">
                  <div class="col-md-6">
                    <label for="ingresoeconomico"> Ingreso Economico del Hogar </label>
                    <input type="number" class="form-control " id="ingresoeconomico" name="ingresoeconomico
                    " placeholder="Escriba su respuesta">
                  </div>
                   
                     <div class="col-md-6">
                      <label for="carrera">CARRERA que estudia en estos momentos</label>
                      <input type="text" class="form-control " id="carrera" name="carrera" placeholder="Escriba su respuesta">
                     </div>                                     
                    </div>

                  <div class="form-group row">
                    <div class="col-md-6">
                      <label for="asignaturas_matriculadas"> Asignaturas Matriculadas</label>
                      <input type="number" class="form-control " id="asignaturas_matriculadas" name="asignaturas_matriculadas" placeholder="Escriba su respuesta">
                    </div>

                    <div class="col-md-6">
                        <label for="calificatucarrera"> Califica tu carrera</label>
                       
                        <select name="calificatucarrera"  class="form-control">
                        <option name="calificatucarrera" value="Excelente" >Excelente</option>
                        <option name="calificatucarrera" value="Satisfecho" >Satisfecho</option>
                        <option name="calificatucarrera" value="Insatisfecho" >Insatisfecho</option>
                        <option name="calificatucarrera" value="No es lo mio" >No es lo mio</option>
                        
                      </select>

                        </div>
                        </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">  Enviar </button>
        </form>
      </div>
    </div>
  </div>
</div>


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


?>
    <tr>
      <th scope="row">Identificación</th>
      <td>Mark</td>   
    </tr>

    <tr>
      <th scope="row">Nombre</th>
      <td>Jacob</td> 
    </tr>

    <tr>
      <th scope="row">Apellido</th>
      <td>Larry</td>  
    </tr>

    <tr>
      <th scope="row">Correo</th>
      <td>Larry</td>  
    </tr>

    <tr>
      <th scope="row">Teléfono</th>
      <td>Larry</td>  
    </tr>

    <tr>
      <th scope="row">Dirección</th>
      <td>Larry</td>    
    </tr>

    <tr>
      <th scope="row">Fecha de Nacimiento</th>
      <td>Larry</td>
    </tr>

    <tr>
      <th scope="row">Actividad Económica del Papá</th>
      <td>Larry</td>    
    </tr>

    <tr>
      <th scope="row">Actividad Económica de la Mamá</th>
      <td>Larry</td>    
    </tr>

    <tr>
      <th scope="row">Estado Civil</th>
      <td>Larry</td>   
    </tr>

     <tr>
      <th scope="row">Género</th>
      <td>Larry</td>   
    </tr>

     <tr>
      <th scope="row">Nivel acádemico del Papá</th>
      <td>Larry</td>  
    </tr>

     <tr>
      <th scope="row">Nivel acádemico de la Mamá</th>
      <td>Larry</td>  
    </tr>

     <tr>
      <th scope="row">Tipo de Institución</th>
      <td>Larry</td>   
    </tr>

    <tr>
      <th scope="row">Tipo de Vivienda</th>
      <td>Larry</td>   
    </tr>

    <tr>
      <th scope="row">Zona de Residencia</th>
      <td>Larry</td>   
    </tr>

    <tr>
      <th scope="row">Carrera</th>
      <td>Larry</td>   
    </tr>

    <tr>
      <th scope="row">Año de graduado de Bachiller</th>
      <td>Larry</td>   
    </tr>

    <tr>
      <th scope="row">Ingreso Económico</th>
      <td>Larry</td>   
    </tr>

    <tr>
      <th scope="row">Calificación de la Carrera</th>
      <td>Larry</td>   
    </tr>

    <tr>
      <th scope="row">Asignaturas Matriculadas</th>
      <td>Larry</td>   
    </tr>

  </tbody>
</table>
</div>

</body>
</html>