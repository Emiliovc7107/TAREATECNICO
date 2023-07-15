<?php 
include('bd.php');

if (isset($_POST['enviar'])) {
    $Gene_id=$_POST['Gene_id'];
    $GC=$_POST['GC'];
    $A1=$_POST['A1'];



    $obtener="INSERT INTO bases(Gene_id,GC,A1) 
    VALUES ('$Gene_id','$GC','$A1')";
    $resultado=mysqli_query($conn, $obtener);

    if ($resultado) {
        echo '<script lenguage="javascript">';
    echo 'alert("Datos enviados")
    window.location="bases.php";
    </script>';
    }else{
        echo "datos no enviados";         
    }
}
?>