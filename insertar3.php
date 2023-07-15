<?php 
include('bd.php');

if (isset($_POST['enviar'])) {
    $RefSeq=$_POST['RefSeq'];
    $Gene_id=$_POST['Gene_id'];
    $strand=$_POST['strand'];
    $GeneLenth=$_POST['GeneLenth'];
    $Gene=$_POST['Gene'];


    $obtener="INSERT INTO gene(RefSeq,Gene_id,strand,GeneLenth,Gene) 
    VALUES ('$RefSeq','$Gene_id','$strand','$GeneLenth','$Gene')";
    $resultado=mysqli_query($conn, $obtener);

    if ($resultado) {
        echo '<script lenguage="javascript">';
    echo 'alert("Datos enviados")
    window.location="gene.php";
    </script>';
    }else{
        echo "datos no enviados";         
    }
}
?>