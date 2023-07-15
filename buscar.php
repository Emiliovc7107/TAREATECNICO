<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="image/x-icon" href="images/logoca.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>busqueda</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

</head>

<body>
  <?php
  $busqueda=$_REQUEST['buscar'];
  if (empty($busqueda)) {
    header("location: mostrar.php");
  }
  ?>
<div class="topnav">
  <a class="active" href="mostrar.php">CLIENTES</a>
  <a href="index.php">INICIO DE SESION</a>
  <div class="search-container">
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
            <th>Gene_id</th>
            <th>Nc</th>
            <th>GC</th>
            <th>Gravy</th>
            <th>Aromo</th>
        </tr>
        <?php 
        include('bd.php');
        $query="SELECT * FROM empresa
        WHERE (Aas like '%$busqueda%' or Gene_id like '%$busqueda%' or Nc like '%$busqueda%' or GC like '%$busqueda%' or Gravy like '%$busqueda%' or Aromo like '%$busqueda%')";
         $resultados=mysqli_query($conn,$query);
        while ($row=mysqli_fetch_array($resultados)){?>
        <tr>
        <td><?php echo $row['Gene_id']?></td>
            <td><?php echo $row['Nc']?></td>
            <td><?php echo $row['GC']?></td>
            <td><?php echo $row['Gravy']?></td>
            <td><?php echo $row['Aromo']?></td>



        <?php } ?> 
      </table>

    </div>
</body>
</html>