<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Eco Shop</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="shortcut icon" href="assets/images/logo.jpg">
</head>
<body>
  <!-- Franja superior imagen, login y busqueda -->
  <div class="Conthcj" style="width: 100%; height: 80px; background: #fafbf9">
    <div class="Conthcl" style= "display: flex; align-items: center;">
      <img class="ImgLog2" src="assets/images/logo.jpg" style="margin-left: 30px;">
      <h3 style="margin-left: 25px; Color: #3c4e43">Eco Shop</h3>
    </div>
    <!-- Barra de de busqueda -->
    <div class= "search-bar" style= "display:flex; justify-content: center;">
      <form action:"buscar.php" method= "GET" style="display: flex; width: 100%;">
        <input type="text" name="q" placeholder="Buscar productos..." style="padding: 8px; height: 30px; border-radius: 5px 0 0 5px; border: 1px; solid #2c6e4f; width: 100%">
        <button type="submit" style="padding: 8px 15px; background: #2c6e4f; color: #fafbf9; border: none; border-radius: 0 5px 5px 0; cursor: pointer;">Buscar</button>
      </form>
    </div>  
    <div class="Conthcr" style="display: flex; align-items: center;">
      <h4 style="margin-right: 30px; color: #3c4e43;">Login</h4>
      <img class="ImgLog3" src="assets/images/avatar.png" style="margin-right: 30px;">
    </div>
  </div>
  <!-- Fin franja superior imagen, login y busqueda -->
  <!-- Barra de navegación - Menú -->
  <nav id="menu">
    <ul>
      <li><a href="#">Inicio</a></li>
      <li><a href="#">Nosotros</a></li>
      <li><a href="#">Servicios</a></li>
      <li><a href="#">Contacto</a></li>
    </ul>
  </nav>
  <!-- Fin barra de navegación - Menú -->

</body>
</html>