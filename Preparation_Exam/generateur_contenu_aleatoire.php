<?php

define("N_MIN", 500);
define("N_MAX", 800);

$mots = array(
    "chat", "chien", "maison", "soleil", "arbre",
    "pomme", "voiture", "ordinateur", "livre", "musique",
    "avion", "mer", "plage", "montagne", "fleur",
    "fruit", "paysage", "enfant", "école", "professeur",
    "amour", "hiver", "été", "printemps", "automne",
    "jour", "nuit", "heure", "minute", "seconde",
    "bouteille", "verre", "tasse", "assiette", "cuillère",
    "fourchette", "couteau", "pantalon", "robe", "chemise",
    "chaussure", "chapeau", "parapluie", "crayon", "stylo",
    "feutre", "gomme", "règle", "carnet", "agenda",
    "journal", "carte", "timbre", "téléphone", "télévision",
    "radio", "vélo", "moto", "train", "avion",
    "bateau", "bus", "voiture", "clé", "porte",
    "fenêtre", "table", "chaise", "canapé", "lampe",
    "plante", "cadre", "horloge", "miroir", "télécommande",
    "coussin", "couverture", "oreiller", "serviette", "sac",
    "valise", "parfum", "crème", "shampooing", "savon",
    "dentifrice", "brosse", "mousse", "lait", "eau",
    "jus", "café", "thé", "bière", "vin",
    "chocolat", "gateau", "bonbon", "glace"
);

// Générer un nombre aléatoire de mots entre 500 et 800
$nb_mots = rand($N_MIN, $N_MAX);

for ($i = 0; $i < $nb_mots; $i++) {
    echo $mots[rand(0, count($mots))] . " ";
}
