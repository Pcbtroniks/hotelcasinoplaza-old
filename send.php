<?php  

$mail='reservaciones@hotelcasinoplaza.mx';  

$name = $_POST['name'];  
$lastname = $_POST['lastname'];  
$address = $_POST['address'];  
$city = $_POST['city'];  
$zip = $_POST['zip'];  
$email = $_POST['email']; 
$phone = $_POST['phone'];  
$date01 = $_POST['date01'];  
$date02 = $_POST['date02'];  
$suite = $_POST['suite'];  
$num = $_POST['num'];  
$num2 = $_POST['num2']; 
$radio = $_POST['trans'];  
$info = $_POST['info'];  

$thank="gracias.php";  

$message = "  
Nombre: ".$name." 
Apellido: ".$lastname."  
Direccion: ".$address." 
Ciudad: ".$city." 
Codigo postal: ".$zip." 
email: ".$email."  
Telefono: ".$phone." 
Fecha llegada: ".$date01." 
Fecha salida: ".$date02." 
Habitacion: ".$suite." 
Personas adultas: ".$num." 
Personas niños: ".$num2." 
Transporte aeropuerto o central: ".$radio." 
Info adicional: ".$info." 
";  

if (mail($mail,"RESERVA Hotel Casino Plaza",$message, "From: $email"))  
Header ("Location: $thank" ); 
 
?>

<?php  

$mail='gventas@hotelcasinoplaza.mx';  

$name = $_POST['name'];  
$lastname = $_POST['lastname'];  
$address = $_POST['address'];  
$city = $_POST['city'];  
$zip = $_POST['zip'];  
$email = $_POST['email']; 
$phone = $_POST['phone'];  
$date01 = $_POST['date01'];  
$date02 = $_POST['date02'];  
$suite = $_POST['suite'];  
$num = $_POST['num'];  
$num2 = $_POST['num2']; 
$radio = $_POST['trans'];  
$info = $_POST['info'];  

$thank="gracias.php";  

$message = "  
Nombre: ".$name." 
Apellido: ".$lastname."  
Direccion: ".$address." 
Ciudad: ".$city." 
Codigo postal: ".$zip." 
email: ".$email."  
Telefono: ".$phone." 
Fecha llegada: ".$date01." 
Fecha salida: ".$date02." 
Habitacion: ".$suite." 
Personas adultas: ".$num." 
Personas niños: ".$num2." 
Transporte aeropuerto o central: ".$radio." 
Info adicional: ".$info." 
";  

if (mail($mail,"RESERVA Hotel Casino Plaza",$message, "From: $email"))  
Header ("Location: $thank" ); 
 
?>

<?php  

$mail='sergiot3rcio@gmail.com';  

$name = $_POST['name'];  
$lastname = $_POST['lastname'];  
$address = $_POST['address'];  
$city = $_POST['city'];  
$zip = $_POST['zip'];  
$email = $_POST['email']; 
$phone = $_POST['phone'];  
$date01 = $_POST['date01'];  
$date02 = $_POST['date02'];  
$suite = $_POST['suite'];  
$num = $_POST['num'];  
$num2 = $_POST['num2']; 
$radio = $_POST['trans'];  
$info = $_POST['info'];  

$thank="gracias.php";  

$message = "  
Nombre: ".$name." 
Apellido: ".$lastname."  
Direccion: ".$address." 
Ciudad: ".$city." 
Codigo postal: ".$zip." 
email: ".$email."  
Telefono: ".$phone." 
Fecha llegada: ".$date01." 
Fecha salida: ".$date02." 
Habitacion: ".$suite." 
Personas adultas: ".$num." 
Personas niños: ".$num2." 
Transporte aeropuerto o central: ".$radio." 
Info adicional: ".$info." 
";  

if (mail($mail,"RESERVA Hotel Casino Plaza",$message, "From: $email"))  
Header ("Location: $thank" ); 
 
?>