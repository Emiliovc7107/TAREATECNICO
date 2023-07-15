<title>Document</title>
</head>
<body>
    
</body>
</html><?php
$us=$_POST['usuario'];
$con=$_POST['contraseña'];

if ($us=="lcp" and $con=="321") {
    echo '<script lenguage="javascript">';
    echo 'alert("USUARIO CORRECTO")
    window.location= "menu.html";
    </script>';
}else {
    echo '<script lenguage="javascript">';
    echo 'alert("USUARIO O CONTRASEÑA INCORRECTOS")
    window.location= "index.php";
    </script>';
}
?>