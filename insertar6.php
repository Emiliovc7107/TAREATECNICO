<?php 
include('bd.php');

if (isset($_POST['enviar'])) {
    $organism_id=$_POST['organism_id'];
    $organism=$_POST['RefSeq'];



    $obtener="INSERT INTO replicon(organism_id,RefSeq) 
    VALUES ('$organism_id','$RefSeq')";
    $resultado=mysqli_query($conn, $obtener);

    if ($resultado) {
        echo '<script lenguage="javascript">';
    echo 'alert("Datos enviados")
    window.location="replicon.php";
    </script>';
    }else{
        echo "datos no enviados";         
    }
}
?>