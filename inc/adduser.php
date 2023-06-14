<?php 
    require_once('../conexion.php');
//validar formaulario
if(!isset($_POST['user']) || $_POST['user']==''|| $_POST['correo']=='' || $_POST['pass1']=='') exit;
//comprovar correo
$accion_email=sprintf("SELECT * FROM z_user WHERE email=%s",formatearCadena($_POST['correo'],'text'));





$consulta_email=mysqli_query($conexion,$accion_email);
$datos_email=mysqli_fetch_assoc($consulta_email);
$cantidad_email=mysqli_num_rows($consulta_email);

//echo $cantidad_email;
if($cantidad_email==0){
    //INSERTAR user
    $accion_adduser = sprintf("INSERT INTO z_user (user,email,password) VALUES (%s,%s,%s)",
                         formatearCadena($_POST['user'],'text'),
                        formatearCadena($_POST['correo'],'text'),
                        formatearCadena($_POST['pass1'],'text'));
    $consulta_adduser = mysqli_query($conexion,$accion_adduser) or die(mysqli_error());
    echo 'corecto';
}
else echo 'existe';


mysqli_free_result($consulta_email);




?>