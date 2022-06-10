<!-- **Prima Milestone:**
Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi.
In questa milestone non ci sarà nessuna chiamata axios il file php stamperà direttamente il “database”
Questo file lo chiamate index.php. Il “database” dei dischi è meglio che sia un file esterno che viene incluso -->


<?php
require_once __DIR__ . '/data/database.php';
//var_dump($albums);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
  <title>Albums</title>
</head>
<body>
  <header></header>
  <main>
    <div class="container d-flex flex-wrap justify-content-between">

      <!-- <div class="album-card d-flex flex-column">
        <img src="https://img.discogs.com/vknPDdrqRbT92pNRX0W4I5N91jg=/fit-in/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/R-1246953-1448927086-6590.jpeg.jpg" alt="">
        <h4 class="pt-3">Live at Wembley 86</h4>
        <span class="pt-2">Queen</span>
        <span class="year">1992</span>
      </div> -->

      <?php foreach($albums as $album): ?>
        <div class="album-card d-flex flex-column">
          <img src="<?php echo $album['poster']; ?>" alt="<?php echo $album['title']; ?>">
          <h4 class="pt-3"><?php echo $album['title'] ?></h4>
          <span class="pt-2"><?php echo $album['author']; ?></span>
          <span class="year"><?php echo $album['year'] ?></span>
        </div>
      <?php endforeach ?>
      
    </div>
  </main>
</body>
</html>