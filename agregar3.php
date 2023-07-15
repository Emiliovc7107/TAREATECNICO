<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/x-icon" href="images/logoca.jpg">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

<form action="insertar3.php" method="POST">
  <div class="container">

    <p>Registre sus datos en cada fila.</p>
    <hr>

    <label for="email"><b>RefSeq</b></label>
    <input type="text" placeholder="RefSeq" name="RefSeq" id="RefSeq" required>

    <label for="psw"><b>Gene_id	</b></label>
    <input type="text" placeholder="Ingrese su Gene_id" name="Gene_id" id="Gene_id" required>

    <label for="psw-repeat"><b>strand</b></label>
    <input type="text" placeholder="Ingrese su strand" name="strand" id="strand" required>

    <label for="psw"><b>GeneLenth</b></label>
    <input type="text" placeholder="Ingrese su GeneLenth" name="GeneLenth" id="GeneLenth" required>

    <label for="psw"><b>Gene</b></label>
    <input type="text" placeholder="Ingrese su Gene" name="Gene" id="Gene" required>
    <hr>

    <button type="submit" class="registerbtn" style="background-color:blue" name="enviar">AGREGAR USUARIO</button>
  </div>
  
  </div>
</form>

</body>
</html>