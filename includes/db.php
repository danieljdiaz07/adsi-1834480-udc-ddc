<?php

class DB{
    private $host;
    private $dbname;
    private $user;
    private $password;
    private $charset;//conjunto de caracteres para conectarnos a la base de datos.
    
    public function _construct(){
        $this->host='localhost';
        $this->dbname='encuestaudc_sjba';
        $this->user='root';
        $this->password='';
        $this->charset='utf8mb4';
    }
    public function connect(){
        try{
           $conexion="mysql:host=".$this->host.";dbname=".$this->dbname.";charset= ".$this->charset;
           
           $options=[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_EMULATE_PREPARES=>false ];
           
           $pdo=new PDO($conexion,$this->user,$this->password,$options);

          

        }catch(PDOException $e){
           print_r("Error Connection:".$e->getMessage());   
        }
    }
}


/*try{
$dbname='encuestaudc_sjba';
$user='root';
$pass='';
$dsn="mysql:host=localhost;dbname=$dbname";


//ESTABLECER CONEX

$dbh=new PDO($dsn,$user,$pass);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

//INSERTAR DATOS

/*$sql="INSERT INTO estudiantes_sjba (nombre,apellido,edad,telefono,identificacion) VALUES (?,?,?,?,?)";
$dbh->prepare($sql)->execute(array('Sebastian','Blanquicett','18 Años','3126653172','10056'));*/


 



/*} catch (PDOException $e){
 echo"Error:".$e->getMessage();
} */

?>