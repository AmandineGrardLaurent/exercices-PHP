<?php

$movies = [
"Les Aventuriers de l'arche perdue" => "1981",
  "Indiana Jones et le Temple maudit" => "1984",
  "Indiana Jones et la Dernière Croisade" => "1989"
];

arsort($movies);

foreach ($movies as $movie_title => $movie_year){
echo("$movie_year - $movie_title<br>");
}

?>
