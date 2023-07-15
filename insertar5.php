<?php 
include('bd.php');

if (isset($_POST['enviar'])) {
    $organism_id=$_POST['organism_id'];
    $organism=$_POST['organism'];
    $Classification=$_POST['Classification'];



    $obtener="INSERT INTO organism(organism_id,organism,Classification) 
    VALUES ('$organism_id','$organism','$Classification')";
    $resultado=mysqli_query($conn, $obtener);

    if ($resultado) {
        echo '<script lenguage="javascript">';
    echo 'alert("Datos enviados")
    window.location="organism.php";
    </script>';
    }else{
        echo "datos no enviados";         
    }
}
?>