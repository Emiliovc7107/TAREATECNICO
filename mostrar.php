<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="image/x-icon" href="images/logoca.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTA CLIENTES</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<style>
   height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-image {
  /* The image used */
  background-image: url("images/fondo.jpg");
  
  /* Add the blur effect */
  filter: blur(8px);
  -webkit-filter: blur(8px);
  
  /* Full height */
  height: 400%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Position text in the middle of the page/image */
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 10px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-40%, -40%);
  z-index: 2;
  width: 100%;
  padding: 40px;
  text-align: center;
}



* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 18px 18px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: blue;
  color: black;
}

.topnav a.active {
  background-color: #DB755F;
  color: Black;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #DB755F;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 3px solid #ccc;  
  }
}

</style>
<body>
<div class="topnav">
  <a class="active" href="menu.html">MENU</a>
  <a class="active" href="index.php">INICIO DE SESION</a>
  <a href="Aas.php">Aas</a>
  <a href="bases.php">bases</a>
  <a href="gene.php">gene</a>
  <a href="geneprop.php">geneprop</a>
  <a href="organism.php">organism</a>
  <a href="replicon.php">replicon</a>
  <div class="search-container">
    <form action="buscar.php" method="GET">
    </form>

  </div>
</div>



    </div>
    <div class="bg-image"><img src="images/fondo.jpg" alt="40000" width="85%"></div>
    

</div>
</body>
</html>