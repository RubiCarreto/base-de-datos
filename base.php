<?php
$conexion=mysqli_connect( "localhost", "root", "", "form");

$nombre=$_POST["nombre"];
$mensaje=$_POST["mensaje"];



$insertar = "INSERT INTO datos(nombre,mensaje) VALUES ('$nombre', '$mensaje')";

$resus = mysqli_query($conexion,$insertar);

if (!$resus) {
	echo '<script>

    alert ("error");
    window.history.go(-1);

	</script>';


	# code...
}
else {
echo '<script>
alert("correcto");
 window.history.go(-1);
</script>';

}
