<?php

function scrappingYuplon(){
  //Credenciales de la base de datos
    $servername = "us-cdbr-iron-east-03.cleardb.net";
    $username = "b1a95458d84cd3";
    $password = "85c25163";

    //Conexión
    $conn = new mysqli($servername, $username, $password);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    else{
      echo "Exito";
    }
  mysqli_select_db($conn,"heroku_8c738f6ddf6cfcd");

  $urlY ='http://www.yuplon.com/';
  $file = file_get_contents($urlY);
  libxml_use_internal_errors(true);
  $html = new DOMDocument();
  $html->loadHTML($file);
  libxml_clear_errors();
  $xpath = new DOMXPath($html);
  /*Se realiza la recolección de todas las url de cada promoción que se encuentre,
  y se almacena en el array $referenciasY*/
  $referenciasY = array();
  $namesY = $xpath->query("//div[@class='extra-campaign']/a");
  for($j = 0; $j < $namesY->length; $j++){
    array_push($referenciasY,$namesY[$j]->getAttribute('href'));
  }
  for ($i=0; $i < 35; $i++) { /*se ejecuta 35 veces para extraer todos los
    datos de los cupones, agregando al url origal cada una de los url de cada promoción */
    $file = file_get_contents($urlY.$referenciasY[$i]);
    libxml_use_internal_errors(true);
    $html = new DOMDocument();
    $html->loadHTML($file);
    libxml_clear_errors();
    $xpath = new DOMXPath($html);
    $titiID = substr($urlY.$referenciasY[$i], 52);
    $name = $xpath->query('//h3[@class="title"]');
    $Insertarnombre = $name[0]->nodeValue;
    $precio = $xpath->query('//div[@class="txt-label-price"]');
    $Insertarpre = substr($precio[0]->nodeValue, 3);
    foreach($xpath->query("//div[@id='deal-brief']/table")->item(0)->getElementsByTagName("tr") as $rows) {
      $cells = $rows->getElementsByTagName("td");
    }
    $InsertarpreR = substr($cells->item(0)->textContent, 3);
    $Insertardescuento = substr($cells->item(1)->textContent, 0, -1);
    $vendidos = $xpath->query('//div[@class="sold-text-locker"]');
    $venta=$vendidos[0]->nodeValue;
    $Insertarvend = substr($venta,51,-24);
    $fechaVal = $xpath->query("//div[@id='deal-timer']");
    $Insertarfecha = $fechaVal[0]->nodeValue;
    $imagen = $xpath->query('//div[@id="slideshow"]/img');
    $size = 100 / $imagen->length;
    $InsertarsrcSkin = $imagen[0]->getAttribute('src');
    /*Una vez que se optiene toda la información de las promociones, se ingresan
    a la base de datos.*/
    $sql = "INSERT INTO promociones (idPromocion,nombre, precioReal, precioOferta,ahorro,cantVentas,imagenusers,url)
                 VALUES ('".$titiID."','".$Insertarnombre."',
                 '".$InsertarpreR."',
                 '".$Insertarpre."','".$Insertardescuento."',
                 '".$Insertarvend."','".$InsertarsrcSkin."','".$urlY.$referenciasY[$i]."')";
    if ($conn->query($sql) === TRUE) {
      echo "Nueva fila agregada";
    } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
}

function scrappingTitiCupon(){
  //Credenciales de la base de datos
  $servername = "us-cdbr-iron-east-03.cleardb.net";
  $username = "b1a95458d84cd3";
  $password = "85c25163";
  //Se levanta la instancia.
  $conn = new mysqli($servername, $username, $password);

  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  else{
    echo "Exito";
  }
mysqli_select_db($conn,"heroku_8c738f6ddf6cfcd");

  $urlTiti ='https://www.titicupon.com';
  $file = file_get_contents($urlTiti);
  libxml_use_internal_errors(true);
  $html = new DOMDocument();
  $html->loadHTML($file);
  libxml_clear_errors();
  $xpath = new DOMXPath($html);
  $referencias = array();
  $namesT1 = $xpath->query("//h2[@class='title']/a");
  $namesT2 = $xpath->query("//h4[@class='product-title']/a");
  $cont=0;
    for($j = 0; $j < $namesT1->length; $j++){
        array_push($referencias,$namesT1[$j]->getAttribute('href'));
      }
      for($j = 0; $j < $namesT2->length; $j++){
          array_push($referencias,$namesT2[$j]->getAttribute('href'));
        }
  for ($i=0; $i < 37; $i++) {
    $file = file_get_contents($urlTiti.$referencias[$i]);
    libxml_use_internal_errors(true);
    $html = new DOMDocument();
    $html->loadHTML($file);
    libxml_clear_errors();
    $xpath = new DOMXPath($html);
    $name = $xpath->query('//h1[@class="cupon-title"]');
    $nombre=$name[0]->nodeValue;
    $precio = $xpath->query('//h3[@class="max-price"]');
    $pre = substr($precio[0]->nodeValue, 3);
    $precioReal = $xpath->query('//h4[@class="normal-price"]');
    $preR = substr($precioReal[0]->nodeValue, 3);
    $oferta = $xpath->query('//div[@class="saving-wrapper"]');
    $oft = substr($oferta[0]->nodeValue, 6, -1);
    $vendidos = $xpath->query('//p[@class="active"]');
    $vend = substr($vendidos[0]->nodeValue,9,-35);
    $fechavalidez = $xpath->query('//span[@class="c_days"]');
    $fech = substr($fechavalidez[0]->nodeValue,0,-5);
    $imagen = $xpath->query('//img[@class="imagecache imagecache-coupon-slider-responsive imagecache-default imagecache-coupon-slider-responsive_default"]');
    $size = 100 / $imagen->length;
    $srcSkin = $imagen[0]->getAttribute('src');

   $sql = "INSERT INTO cupones (nombre, precioReal, precioOferta,ahorro,cantVentas,validez,imagen,url)
                VALUES ('".$nombre."',
                '".$preR."',
                '".$pre."','".$oft."',
                '".$vend."','".$fech."','".$srcSkin."','".$urlTiti.$referencias[$i]."')";

  if ($conn->query($sql) === TRUE) {
      echo "Nueva fila agregada";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  }
}
//scrappingTitiCupon();
//scrappingYuplon();

$start = microtime(true);
set_time_limit(3600);
for ($i = 0; $i < 3601; ++$i) {
  if($i == 3600){
    scrappingTitiCupon();
    scrappingYuplon();
  }
  time_sleep_until($start + $i + 1);
}



 ?>
