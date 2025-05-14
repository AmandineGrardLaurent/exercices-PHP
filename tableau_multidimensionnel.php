<?php

$movies = [
"Les Aventuriers de l'arche perdue" => ["Harrison Ford", "Karen Allen", "Paul Freeman"],
  "Indiana Jones et le Temple maudit" => ["Harrison Ford", "Kate Capshaw", "Ke Huy Quan"],
  "Indiana Jones et la Dernière Croisade" => ["Harrison Ford", "Sean Connery", "Denholm Elliott", "autre"]
];


foreach($movies as $movie_title => $actors){
  echo "Dans le film $movie_title, les acteurs principaux sont :";
  foreach($actors as $actor){
    echo  "<li>$actor</li>";
  };
};

?>
