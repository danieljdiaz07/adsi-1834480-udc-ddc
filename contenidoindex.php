<?php
 include_once("sesiones.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <title>Portal UDC</title>
    <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
    
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="background:#E67E22;" >

     
<!-- Sidebar - Brand -->
          <div style="text-align: center;" class="sidebar-brand-icon rotate-n-0 responsive">
                <img style="width: 206px; height: 13 0px;" src="img/logoudc.png" alt="">
          </div>
      
     
     <hr class="sidebar-divider my-2">

     <!-- Nav Item - Dashboard -->
     <li class="nav-item active">
       <a class="nav-link" href="contenidoindex.php">
       <i class="fas fa-home" style="font-size: 21px;"></i>
         <span style="font-size: 15px" >Inicio</span></a>
     </li>

    
     <hr class="sidebar-divider my-1">
     <!-- Heading 
     <div class="sidebar-heading">
       Interface
     </div>

     <!-- Nav Item - Pages Collapse Menu -->
     <li class="nav-item active">
       <a class="nav-link collapsed" href="validateencuesta.php" >
         <i class="fas fa-fw fa-file-signature" style="font-size: 21px;"></i>
         <span style="font-size: 15px;">ENCUESTA</span>
       </a>
      
     </li>

     <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

           

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small" style="font-size:16px; " > <?=$_SESSION['nombre']?></span>
                <img class="img-profile rounded"  src="img/user.png" >
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                 Perfil
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Configuración
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Actividad
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="cerrarsesion.php" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Cerrar Sesión
                </a>
              </div>
            </li>

          </ul>

        </nav>

<div class="container-fluid">

                    <div class="form-group row"> 
                    <div class="col-md-6">
 
                  <h5 style="Font-size:28px;"> En la UdeC te mantenemos informado </h5>
                  <hr class="sidebar-divider my-2">
                  <p>

                  <blockquote class="twitter-tweet"><p lang="es" dir="ltr">📲Conéctate a nuestra charla virtual &quot;Planificación familiar y aislamiento&quot; hoy a las 3:00 p.m. ¡Te esperamos!<br>➡️ <a href="https://t.co/SMkFhwU7We">https://t.co/SMkFhwU7We</a> 
                  <a href="https://t.co/zSYXi3rmdH">pic.twitter.com/zSYXi3rmdH</a></p>&mdash; Universidad de Cartagena (@uni_cartagena) <a href="https://twitter.com/uni_cartagena/status/1263837388515745792?ref_src=twsrc%5Etfw">May 22, 2020</a>
                  </blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                 
                  </p>
                    </div>

                    <div class="col-md-6">
            
            <h5 style="Font-size:28px;">  Nos preocupamos por ustedes</h5>
            <hr class="sidebar-divider my-2">

            <p>  
            Estamos pasando en medio de una pandemia, y necesitamos cuidarnos , para ello debemos de estar en nuestras casas, mantenernos informados es importante para saber que esta pasando
            y no caer en la ignorancia y cometer errores por falta de atención. Utiliza <a href="https://twitter.com/intent/tweet?button_hashtag=UdeCcovid19&ref_src=twsrc%5Etfw" class="twitter-hashtag-button" data-show-count="false">Tweet #UdeCcovid19</a>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> para que nos expreses todas tus opiniones y entre todos interactuemos desde nuestras casas.
            
            <hr class="sidebar-divider my-2">

            <blockquote class="twitter-tweet"><p lang="es" dir="ltr">“Con la <a href="https://twitter.com/hashtag/COVID19?src=hash&amp;ref_src=twsrc%5Etfw">#COVID19</a>, el planeta nos ha enviado un mensaje de advertencia muy fuerte: la humanidad tiene que reinventar su relación con la naturaleza”<br><br>El <a href="https://twitter.com/pnud?ref_src=twsrc%5Etfw">@pnud</a> ayudará a los países a reconstruir mejor tras la crisis <a href="https://t.co/HfDPSFQiZd">https://t.co/HfDPSFQiZd</a></p>&mdash; Noticias ONU (@NoticiasONU) <a href="https://twitter.com/NoticiasONU/status/1260743270180761600?ref_src=twsrc%5Etfw">May 14, 2020</a></blockquote>
             <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </p>
                    </div>
                    </div>
  </div>

<!------END -->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Gracias por haber iniciado sesión, aquí estamos cuando nos necesites.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary" href="cerrarsesion.php">Cerrar Sesión</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>
</html>