<!DOCTYPE html>
 <html>
 <head>
      <title>Exemplo 02 - Consumindo via php</title>
 </head>
 <body>
      <?php
        $hg = file_get_contents("http://localhost:8081/marca");
        echo $hg;
      ?>
 </body>
 </html>