<?php 
include('bd.php');

if (isset($_POST['enviar'])) {
    $idCliente=$_POST['bases'];
    $nombre=$_POST['gene'];
    $apellido=$_POST['geneprop'];
    $direccion=$_POST['organism'];
    $telefono=$_POST['replicon'];
    $correo=$_POST['correo'];
    $fecha_nac=$_POST['fechanac'];

    $obtener="INSERT INTO empresa(aas,bases,gene,geneprop,organism,replicon) 
    VALUES ('$aas','$bases','$gene','$geneprop','$organism','$replicon')";
    $resultado=mysqli_query($conn, $obtener);

    if ($resultado) {
        echo '<script lenguage="javascript">';
    echo 'alert("Datos enviados")
    window.location="cliente.php";
    </script>';
    }else{
        echo "datos no enviados";         
    }
}
?>