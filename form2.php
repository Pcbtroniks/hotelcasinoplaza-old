<?php  

$mail='reservaciones@hotelcasinoplaza.mx';  

$nombre = $_POST['nombre'];  
$telefono = $_POST['telefono']; 
$email = $_POST['email']; 
$mensaje = $_POST['mensaje'];  

$thank="gracias.php";  

$mensaje = "  
Nombre: ".$nombre."  
Telefono: ".$telefono."
email: ".$email."  
Mensaje: ".$mensaje." 
";  

if (mail($mail,"CONTACTO 2 Casino Plaza",$mensaje, "From: $email"))  
Header ("Location: $thank" ); 
 
?>

<?php  

$mail='gventas@hotelcasinoplaza.mx';  

$nombre = $_POST['nombre'];  
$telefono = $_POST['telefono']; 
$email = $_POST['email']; 
$mensaje = $_POST['mensaje'];  

$thank="gracias.php";  

$mensaje = "  
Nombre: ".$nombre."  
Telefono: ".$telefono."
email: ".$email."  
Mensaje: ".$mensaje." 
";  

if (mail($mail,"CONTACTO 2 Casino Plaza",$mensaje, "From: $email"))  
Header ("Location: $thank" ); 
 
?>



<?php  

$mail='sergiot3rcio@gmail.com';  

$nombre = $_POST['nombre'];  
$telefono = $_POST['telefono']; 
$email = $_POST['email']; 
$mensaje = $_POST['mensaje'];  

$thank="gracias.php";  

$mensaje = "  
Nombre: ".$nombre."  
Telefono: ".$telefono."
email: ".$email."  
Mensaje: ".$mensaje." 
";  

if (mail($mail,"CONTACTO 2 Casino Plaza",$mensaje, "From: $email"))  
Header ("Location: $thank" ); 
 
?>