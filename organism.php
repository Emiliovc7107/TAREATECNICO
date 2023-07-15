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
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
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
  background: #ddd;
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
    border: 1px solid #ccc;  
  }
}
</style>
<body>
<div class="topnav">
  <a class="active" href="mostrar.php">MENU</a>
  <a href="index.php">INICIO DE SESION</a>
  <a href="agregar5.php">AGREGAR</a>
  <div class="search-container">
    <form action="buscar.php" method="GET">
      <input type="text" placeholder="Buscar" name="buscar">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
   
  </div>
</div>

<div style="padding-left:16px">

</div>

    <div class="container">
      <table border="1" width="100%">
        <tr>
            <th>organism_id</th>
            <th>organism</th>
            <th>Classification</th>

        </tr>
        <?php 
        include("bd.php");
        $querey="SELECT * FROM organism";
        $resultados=mysqli_query($conn,$querey);
        while($row=mysqli_fetch_array($resultados)){?>
        <tr>
            <td><?php echo $row['organism_id']?></td>
            <td><?php echo $row['organism']?></td>
            <td><?php echo $row['Classification']?></td>

           </td>

            
        </tr>

        <?php } ?>

      </table>

    </div>
</body>
</html>