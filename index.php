<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>La Femme</title>
    <link rel="stylesheet" href="css/index.css" />
    <link rel="icon" href="img/iconBlanco.png" />
  </head>
  <body>
    <header>
      <div class="header-title">
        <div class="nav-logo">
          <a href="index.php"><img src="img/logoHorizontal.png" /></a>
        </div>
        <div class="nav-text">
          <em>"La belleza comienza con la decisión de ser uno mismo"</em>
          <p>- Coco Chanel</p>
        </div>
      </div>
      <nav class="navbar">
        <ul class="navbar-nav">
          <li class="nav-item" id="page-main">
            <a href="index.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a href="navegation/categories.html">Categorías</a>
          </li>
          <li class="nav-item">
            <a href="navegation/ubication.html">Ubicación</a>
          </li>
          <li class="nav-item">
            <a href="navegation/contact.html">Contacto</a>
          </li>
          <li class="nav-item">
            <a href="navegation/aboutUs.html">Sobre nosotros</a>
          </li>
          <li class="nav-item">
            <a href="navegation/misionVision.html">Misión y visión</a>
          </li>
          <li class="nav-item" style="float: right">
            <input type="text" placeholder="Buscar" />
            <img src="img/lens.png" alt="Buscar" />
          </li>
        </ul>
      </nav>
    </header>
    <main>
      <center><h1>Trabajos recientes</h1></center>
      <section>
        <div class="carousel">
          <ul class="slider">
            <li id="slide1">
              <img src="img/slide1.jpg" />
            </li>
            <li id="slide2">
              <img src="img/slide2.jpg" />
            </li>
            <li id="slide3">
              <img src="img/slide3.jpg" />
            </li>
          </ul>
          <ul class="numbers">
            <li id="sl1"><a href="#slide1">1</a></li>
            <li id="sl2"><a href="#slide2">2</a></li>
            <li id="sl3"><a href="#slide3">3</a></li>
          </ul>
        </div>
      </section>
      <section>
        <ul class="promotions">
          <li><img src="img/superOferta.gif" class="promotion" /></li>
          <li>
            <p class="promotion">
              <strong>
                ¡¡En la compra de un acondicionador, llévate el otro a mitad de
                precio!!
              </strong>
            </p>
          </li>
        </ul>
      </section>
    </main>
    <footer>
      <ul class="contact-us">
        <li class="social-media">
          <p id="contact-us-text">Contáctanos en:</p>
        </li>
        <li>
          <a href="https://www.facebook.com/rosalba.alonsoluna">
            <img src="img/facebook.svg" />
          </a>
        </li>
        <li>
          <a href="https://www.instagram.com/rosalbaalonsoluna/">
            <img src="img/Instagram.png" />
          </a>
        </li>
        <li>
          <a href="https://api.whatsapp.com/send?phone=526561442741">
            <img src="img/whatsapp.png" />
          </a>
        </li>
      </ul>
    </footer>
  </body>
</html>
<?php

    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "LoginUsuarios";
    $conexion = new myqli($server, $user, $pass, $db);
    if($conexion->connect_err){
        die("Error connecting to".$conexion->connect_err);
    }
/*
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, _name, img FROM Peinados";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["img"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["img"]. "<br>";
  }
} else {
  echo "0 results";
}
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, _name, img FROM Peinados";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["img"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["img"]. "<br>";
  }
} else {
  echo "0 results";
}
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, _name, img FROM Tintes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["img"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["img"]. "<br>";
  }
} else {
  echo "0 results";
}
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, _name, img FROM Cortes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["img"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["img"]. "<br>";
  }
} else {
  echo "0 results";
}
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, _name, img FROM Bayalage";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["img"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["img"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();

*/
?>
