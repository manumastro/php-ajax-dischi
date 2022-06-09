<!-- **Prima Milestone:**
Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi.
In questa milestone non ci sarà nessuna chiamata axios il file php stamperà direttamente il “database”
Questo file lo chiamate index.php. Il “database” dei dischi è meglio che sia un file esterno che viene incluso -->


<?php
include 'database.php';
var_dump($albums);

?>