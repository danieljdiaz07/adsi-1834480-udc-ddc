<?php
include_once('sesiones.php');
?>

<?php 

  try {
    $dbname='encuestaudc_ddc';
    $user='root';
    $pass='';
    $dsn="mysql:host=localhost;dbname=$dbname";

    //ESTABLECER CONEXIÓN

    $conn=new PDO($dsn,$user,$pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql0 = "SELECT * FROM genero_ddc";
    $stm0 = $conn->prepare($sql0);
    $stm0->execute();

    $sql11 = "SELECT * FROM region_ddc";
    $stm2 = $conn->prepare($sql11);
    $stm2->execute();
   
    $sql12 = "SELECT * FROM estadocivil_ddc";
    $stm3 = $conn->prepare($sql12);
    $stm3->execute();

    $sql13 = "SELECT * FROM tipodeinstitucion_ddc";
    $stm4 = $conn->prepare($sql13);
    $stm4->execute();

    $sql14 = "SELECT * FROM tiempo_de_graduado_ddc";
    $stm5 = $conn->prepare($sql14);
    $stm5->execute();
    
    $sql15 = "SELECT * FROM  nivelacademicopapa_ddc";
    $stm6 = $conn->prepare($sql15);
    $stm6->execute();
   
    $sql16 = "SELECT * FROM  nivelacademicomama_ddc";
    $stm7 = $conn->prepare($sql16);
    $stm7->execute();
  
     $sql16 = "SELECT * FROM  tipodevivienda_ddc";
    $stm8 = $conn->prepare($sql16);
    $stm8->execute();

    $sql17 = "SELECT * FROM  calificatucarrera_ddc";
    $stm9 = $conn->prepare($sql17);
    $stm9->execute();

      } catch (Exception $e) {
        echo 'Connected fallida: '.$e->getMessage();
      }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <meta name="description" content="">
    <meta name="author" content="">
      <title>Portal UDC</title>

    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css"> 
  <style>
  html,
body {
  height: 100%;
}

body {
  display: -ms-flexbox;
  -ms-flex-align: center;
  align-items: center;
 
 
}
label, span{
  font-weight: bold;
}
button{

  width:33.3%;
  

}
</style>
<body>
<?php
include_once("headerynav.php");
?>
   <div class ="container ">
 
            <form class="user" method="post" action="guardarencuesta.php" >
            <h2> <strong>Bienvenido <?=$_SESSION['nombre']?> </strong> </h2>
            <span> Por favor realice la siguiente encuesta</span>
            <hr class="sidebar-divider d-none d-md-block">
            <h2> <strong>Encuesta Universidad de Cartagena</strong> </h2>
              
              
              <div class="form-group row">
              <div class="col-md-12">
              <label for="identificacion"> Identificacion</label>
              <input type="text" class="form-control form-control-user" id="identificacion" name="identificacion" placeholder="Identificacion" >
              </div>
              </div>

              <div class="form-group row">
              <div class="col-md-6">
                  <label for="nombre"> Nombre</label>
                    <input type="text" class="form-control form-control-user" id="nombre" name="nombre"  placeholder="Escriba su respuesta">
                  </div>
                

                
              <div class="col-md-6">
              <label for="apellido"> Apellido</label>
              <input type="text" class="form-control form-control-user" id="apellido" name="apellido" placeholder="Escriba su respuesta" >
              </div>
              </div>

              <div class="form-group row">
              <div class="col-md-6">
                  <label for="email"> Correo</label>
                    <input type="email" class="form-control form-control-user" id="email" name="email"  placeholder="Escriba su respuesta">
                  </div>
                

                
                <div class="col-md-6">
                  <label for="nacimiento"> Fecha de nacimiento</label>
                    <input type="date" class="form-control form-control-user" id="nacimiento" name="nacimiento"  placeholder="Escriba su respuesta">
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
                    <?php 
                            $rows2 = $stm2->fetchAll(PDO::FETCH_OBJ);

                                      foreach ($rows2 as $row2) {
                                         $row2->id;
                                         $row2->region;  
                                         echo "
                                            <option value='$row2->id'>$row2->region</option>
        
                                         ";
                                      }
                            ?>
                 
                    </select>
 
                   </div>
                  </div>

                  <div class="form-group row">
                     <div class="col-md-6">                   
                      <label for="genero">Genero </label></br>
                       <select name="genero" class="form-control">
                            <?php 
                            $rows0 = $stm0->fetchAll(PDO::FETCH_OBJ);

                                      foreach ($rows0 as $row0) {
                                         $row0->id;
                                         $row0->genero;  
                                         echo "
                                            <option value='$row0->id'>$row0->genero</option>
        
                                         ";
                                      }
                            ?>
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
                   
                  <?php 
                            $rows3 = $stm3->fetchAll(PDO::FETCH_OBJ);

                                      foreach ($rows3 as $row3) {
                                         $row3->id;
                                         $row3->estadocivil;  
                                         echo "
                                            <option value='$row3->id'>$row3->estadocivil</option>
        
                                         ";
                                      }
                            ?>

                 </select>
              </div>
              </div>

               <div class="form-group row">
                 <div class="col-md-6">
                    <label for="tipodeinstitucion"> Tipo de Institución</label>                       
                   <select name="tipodeinstitucion"  class="form-control">
                    
                   <?php 
                            $rows4 = $stm4->fetchAll(PDO::FETCH_OBJ);

                                      foreach ($rows4 as $row4) {
                                         $row4->id;
                                         $row4->tipodeinstitucion;  
                                         echo "
                                            <option value='$row4->id'>$row4->tipodeinstitucion</option>
        
                                         ";
                                      }
                            ?>

                  </select>
                 </div>            
                
                
                  <div class="col-md-6">
                  <label for="tiempo_de_graduado"> Año de graduación de bachiller</label>

                        <select name="tiempo_de_graduado" class="form-control">

                        <?php 
                            $rows5 = $stm5->fetchAll(PDO::FETCH_OBJ);

                                      foreach ($rows5 as $row5) {
                                         $row5->id;
                                         $row5->tiempo_de_graduado;  
                                         echo "
                                            <option value='$row5->id'>$row5->tiempo_de_graduado</option>
        
                                         ";
                                      }
                            ?>
                        </select>

                   </div>
                  </div>

                  <div class="form-group row">
                   <div class="col-md-6">
              
                  <label for="actividaddelpapa"> Trabajo del Padre</label>
                    <input type="text" class="form-control form-control-user" id="actividaddelpapa" name="actividaddelpapa" placeholder="Escriba su respuesta">
                    </div>

                  <div class="col-md-6">
                    <label for="actividaddelamama"> Trabajo de la Madre</label>
                    <input type="text" class="form-control form-control-user" id="actividaddelamama" name="actividaddelamama" placeholder="Escriba su respuesta">
                  </div>
                  </div>

             <div class="form-group row">
               <div class="col-md-6">
                
                <label for="nivelacademico_papa"> Nivel academico del Padre</label>
                   <select name="nivelacademico_papa"  class="form-control">

                   <?php 
                            $rows6 = $stm6->fetchAll(PDO::FETCH_OBJ);

                                      foreach ($rows6 as $row6) {
                                         $row6->id;
                                         $row6->nivelacademico_papa;  
                                         echo "
                                            <option value='$row6->id'>$row6->nivelacademico_papa</option>
        
                                         ";
                                      }
                            ?>
                   </select>
                  </div>

                <div class="col-md-6">
               
                  <label for="nivelacademico_mama"> Nivel academico de la Madre</label>
                   <select name="nivelacademico_mama"  class="form-control">

                   <?php 
                            $rows7 = $stm7->fetchAll(PDO::FETCH_OBJ);

                                      foreach ($rows7 as $row7) {
                                         $row7->id;
                                         $row7->nivelacademico_mama;  
                                         echo "
                                            <option value='$row7->id'>$row7->nivelacademico_mama</option>
        
                                         ";
                                      }
                            ?>

                   </select>

                </div>
            </div>


                  <div class="form-group row">
                        <div class="col-md-12">
                          <label for="tipodevivienda"> Tipo de vivienda</label>
                        <select name="tipodevivienda"  class="form-control">

                        <?php 
                            $rows8 = $stm8->fetchAll(PDO::FETCH_OBJ);

                                      foreach ($rows8 as $row8) {
                                         $row8->id;
                                         $row8->tipodevivienda;  
                                         echo "
                                            <option value='$row8->id'>$row8->tipodevivienda</option>
        
                                         ";
                                      }
                            ?>
                          
                        </select>
                    </div>
                    </div>

            <div class="form-group row">
                  <div class="col-md-6">
                    <label for="ingresoeconomico"> Ingreso Economico del Hogar </label>
                    <input type="number" class="form-control form-control-user" id="ingresoeconomico" name="ingresoeconomico" placeholder="Escriba su respuesta">
                  </div>
                   
                     <div class="col-md-6">
                      <label for="carrera">CARRERA que estudia en estos momentos</label>
                      <input type="text" class="form-control form-control-user" id="carrera" name="carrera" placeholder="Escriba su respuesta">
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
                          
                         <?php 
                            $rows9 = $stm9->fetchAll(PDO::FETCH_OBJ);

                                      foreach ($rows9 as $row9) {
                                         $row9->id;
                                         $row9->calificatucarrera;  
                                         echo "
                                            <option value='$row9->id'>$row9->calificatucarrera</option>
        
                                         ";
                                      }
                            ?>
                        
                      </select>

                        </div>
                        </div>

                        <button type="submit" class="btn btn-primary">  Enviar </button>
                    

               
               
            </form>
      </div>
           
        


</body>
</html>