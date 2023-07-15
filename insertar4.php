<?php 
include('bd.php');

if (isset($_POST['enviar'])) {
    $Gene_id=$_POST['Gene_id'];
    $GC=$_POST['GC'];
    $Gravy=$_POST['Gravy'];
    $Aromo=$_POST['Aromo'];


    $obtener="INSERT INTO geneprop(Gene_id,GC,Gravy,Aromo) 
    VALUES ('$Gene_id','$GC','$Gravy','$Aromo')";
    $resultado=mysqli_query($conn, $obtener);

    if ($resultado) {
        echo '<script lenguage="javascript">';
    echo 'alert("Datos enviados")
    window.location="geneprop.php";
    </script>';
    }else{
        echo "datos no enviados";         
    }
}
?>