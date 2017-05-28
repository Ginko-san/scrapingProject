<!DOCTYPE html>
 <html>
   <head>
   </head>
 <body>
<?php
function scrappingTitiCupon(){
  $urlTiti ='https://www.titicupon.com';
  $file = file_get_contents($urlTiti);
  libxml_use_internal_errors(true);
  $html = new DOMDocument();
  $html->loadHTML($file);
  libxml_clear_errors();
  $xpath = new DOMXPath($html);
  $referencias = array();
  $nombresT = array();
  $ofertasT = array();
  $preciosT = array();
  $vendidosT = array();
  $fechasvalidezT = array();
  $imagenesT = array();
  $namesT1 = $xpath->query("//h2[@class='title']/a");
  $namesT2 = $xpath->query("//h4[@class='product-title']/a");
  $cont=0;
    for($j = 0; $j < $namesT1->length; $j++){
        array_push($referencias,$namesT1[$j]->getAttribute('href'));
        #echo $namesT1[$j]->getAttribute('href')."<br>";
      }
      for($j = 0; $j < $namesT2->length; $j++){
          array_push($referencias,$namesT2[$j]->getAttribute('href'));
          #echo $namesT2[$j]->getAttribute('href')."<br>";
        }
  for ($i=0; $i < 39; $i++) {
    $file = file_get_contents($urlTiti.$referencias[$i]);
    libxml_use_internal_errors(true);
    $html = new DOMDocument();
    $html->loadHTML($file);
    libxml_clear_errors();
    $xpath = new DOMXPath($html);
    $name = $xpath->query('//h1[@class="cupon-title"]');
    array_push($nombresT, $name[0]->nodeValue);
    $precio = $xpath->query('//h3[@class="max-price"]');
    array_push($preciosT,$precio[0]->nodeValue);
    $oferta = $xpath->query('//div[@class="saving-wrapper"]');
    array_push($ofertasT,$oferta[0]->nodeValue);
    $vendidos = $xpath->query('//p[@class="active"]');
    array_push($vendidosT,$vendidos[0]->nodeValue);
    $fechavalidez = $xpath->query('//span[@class="c_days"]');
    array_push($fechasvalidezT,$fechavalidez[0]->nodeValue);
    $imagen = $xpath->query('//img[@class="imagecache imagecache-coupon-slider-responsive imagecache-default imagecache-coupon-slider-responsive_default"]');
    $size = 100 / $imagen->length;
    $srcSkin = $imagen[0]->getAttribute('src');
    array_push($imagenesT,$srcSkin);
    echo $nombresT[$i]."<br>".$preciosT[$i]."<br>".$ofertasT[$i]."<br>";
    echo $vendidosT[$i]."<br>".$fechasvalidezT[$i]."<br><br>";
    echo ('<img src="'.$imagenesT[$i].'" width="'.$size.'%"><br>');
  }
}

function scrappingYuplon(){
  $urlY ='http://www.yuplon.com/';
  $file = file_get_contents($urlY);
  libxml_use_internal_errors(true);
  $html = new DOMDocument();
  $html->loadHTML($file);
  libxml_clear_errors();
  $xpath = new DOMXPath($html);
  $referenciasY = array();
  $nombresY = array();
  $ofertasY = array();
  $preciosY = array();
  $fechasvalidezY = array();
  $imagenesY = array();
  $vendidosY = array();
  $namesY = $xpath->query("//div[@class='extra-campaign']/a");
  for($j = 0; $j < $namesY->length; $j++){
      array_push($referenciasY,$namesY[$j]->getAttribute('href'));
      #echo $namesY[$j]->getAttribute('href')."<br>";
    }
    for ($i=0; $i < 39; $i++) {
      $file = file_get_contents($urlY.$referenciasY[$i]);
      libxml_use_internal_errors(true);
      $html = new DOMDocument();
      $html->loadHTML($file);
      libxml_clear_errors();
      $xpath = new DOMXPath($html);
      $name = $xpath->query('//h3[@class="title"]');
      array_push($nombresY, $name[0]->nodeValue);
      $precio = $xpath->query('//div[@class="txt-label-price"]');
      array_push($preciosY,$precio[0]->nodeValue);
      $oferta = $xpath->query("//div[@id='deal-brief']/table");
      echo $oferta[0]->nodeValue."-----------";
      array_push($ofertasY,$oferta[0]->nodeValue);
      $vendidos = $xpath->query('//div[@class="sold-text-locker"]');
      array_push($vendidosY,$vendidos[0]->nodeValue);
      $fechavalidez = $xpath->query('//div[@class="days"]');
      array_push($fechasvalidezY,$fechavalidez[0]->nodeValue);
      $imagen = $xpath->query('//div[@id="slideshow"]/img');
      $size = 100 / $imagen->length;
      $srcSkin = $imagen[0]->getAttribute('src');
      array_push($imagenesY,$srcSkin);
      echo $nombresY[$i]."<br>".$preciosY[$i]."<br>"."<br>";
      echo $vendidosY[$i]."<br>".$fechasvalidezY[$i]."<br><br>";
      echo ('<img src="'.$imagenesY[$i].'" width="'.$size.'%"><br>');
    }
}

scrappingTitiCupon();





  ?>
     </body>
   </hmtl>
