<?php
require 'database.php';


$albumsToPrint = empty($_GET['genre']) || $_GET['genre'] === 'all' ? $albums : [];
$genres = [];


if(count($albumsToPrint) === 0){

  foreach($albums as $album){
    if($album['genre'] === $_GET['genre']){
      $albumsToPrint[] = $album;
    }
  }

}

foreach($albums as $album){
  if(!in_array($album['genre'], $genres)){
    $genres[] = $album['genre'];
  }
}

$response = [
  'albums' => $albumsToPrint,
  'genres' => $genres,
];

//var_dump($response);
header('Content-Type: application/json');
echo json_encode($response);
?>
