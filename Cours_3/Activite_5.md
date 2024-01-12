## Activité 5: [GRID GARDEN](https://cssgridgarden.com/)

### 01. Arrosez seulement les régions qui ont des carottes
Selectionner la troisème colonne.
```css
grid-column-start: 3;
```

### 02. Empoisonnez la mauvaise herbe
Selectionner la cinquième colonne.
```css
grid-column-start: 5;
```

### 03. Arrosez toutes vos carottes tout en évitant la boue
Selectionner les colonnes jusqu'à la quatrième (excluse).
```css
grid-column-end: 4;
```

### 04. Arrosez vos carottes
Selectionner les colonnes jusqu'à la deuxième (incluse).
```css
grid-column-end: 2;
```

### 05. Arrosez vos carottes en partant de la droite
Selectionner les colonnes jusqu'à l'avant-dernière (incluse) en comtant les lignes verticales de droite à gauche.
```css
grid-column-end: -2;
```

### 06. Empoisonnez la mauvaise herbe
En utilisant une valeur négative pour la propriété `grid-column-start`, remplir de gauche à droite en partant de la troisième colonne à partir de la droite.
```css
grid-column-start: 4;
```

### 07. Arrosez les carottes au centre
Au lieu de définir le nombre absolu de colonnes, utiliser le mot-clé `span` pour préciser le nombre de lignes l'élément devrait occuper.
```css
grid-column-end: span 2;
```

### 08. Arrosez toute la ligne de carottes
Utiliser `span` à nouveau.
```css
grid-column-end: span 5;
```

### 09. Arrosez vos carottes
Utiliser `span` pour définir la largeur relative avec la propriété `grid-column-start`.
```css
grid-column-start: 3 span;
```

### 10. Simplifiez l'arrosage de vos carottes
Utiliser la propriété abrégée `grid-column`, qui permet de combiner les propriétés `grid-column-start` et `grid-column-end` en une seule ligne.
```css
grid-column: 4 / 6;
```

### 11. Arrosez vos carottes
Utiliser `span` avec la propriété abrégée `grid-column` pour selectionner les colonnes 2 (incluse) à 5 (excluse).
```css
grid-column: 2 / 5;
```
OU
```css
grid-column: 2 / 3 span;
```

### 12. Arrosez ces carottes
Utiliser la propriété `grid-row-start` pour le positionnement vertical, elle fonctionne de la même manière que les propriétés pour le positionnement horizontal.
```css
grid-row-start: 3;
```

### 13. Arrosez ces carottes
Utiliser la propriété abrégée `grid-row` pour selectionner les lignes 3 (incluse) à 6 (excluse).
```css
grid-row: 3 / 6;
```
OU
```css
grid-row: 3 / 3 span;
```

### 14. Empoisonnez la mauvaise herbe
Utiliser à la fois les propriétés abrégées `grid-column` et `grid-row`.
```css
grid-column: 2;
grid-row: 5;
```

### 15. Arrosez la zone de carottes
Utiliser `grid-column` et `grid-row` pour selectionner les colonnes 2 (incluse) à 6 (excluse) et les lignes 1 (incluse) à 6 (excluse).
```css
grid-column: 2 / 6;
grid-row: 1 / 6;
```
OU
```css
grid-column: 2 / 4 span;
grid-row: 1 / 5 span;
```

### 16. Simplifiez encore l'arrosage de vos carottes
Utiliser la propriété `grid-area` qui combine `grid-column` et `grid-row` ensemble : *ligne et colonne de départ, puis ligne et colonne de fin*.
```css
grid-area: 1 / 2 / 4 / 6;
```
OU
```css
grid-area: 1 / 2 / 3 span / 5 span;
```

### 17. Définissez deux régions
Créer une zone superposée avec la propriété `grid-area`.
```css
grid-area: 2 / 3 / 5 / 6;
```
OU
```css
grid-area: 2 / 3 / 3 span / 3 span;
```

### 18. Des carottes sont empoisonnées et la mauvaise herbe est arrosée
Utiliser la propriété `order` qui permet de définir un ordre spécifique pour les éléments dans la grille. Si tous les éléments avec la classe spécifiée ont un ordre égal à zéro, n'importe quelle valeur plus élevée à l'élément le déplace à la fin de la grille.
```css
order: 4;
```

### 19. L’eau et le poison se sont alternés
Utiliser la propriété `order` pour déplacer tous les éléments avec la classe spécifiée au début, cela nécessite une valeur négative.
```css
order: -1;
```

### 20. Ajustez le jardin pour arroser vos carottes
Créer un modèle pour la grille : deux colonnes de largeur égale.
```css
grid-template-columns: 50%;
```

### 21. Ne sur-arrosez pas votre jardin
Utiliser la fonction repeat. Fournir deux paramètres à la fonction - le nombre de répétitions et la largeur d'une colonne.
```css
grid-template-columns: repeat(8, 12.5%);
```

### 22. Mélanger différentes unités
Utiliser un scénario plus complexe avec la propriété `grid-template-columns` qui mélange différentes unités pour créer des colonnes.
```css
grid-template-columns: 100px 3em 40%;
```

### 23. 1/6 de mauvaises herbes et 5/6 de carottes
Utiliser la mesure `fr` et diviser en 6 colonnes.
```css
grid-template-columns: 1fr 5fr;
```

### 24. Arrosez la colonne de carottes à gauche et empoisonnez la colonne de mauvaises herbes à droite
Créer deux premières et dernières colonnes fixes, et trois colonnes qui partagent l'espace entre elles.
```css
grid-template-columns: 50px 1fr 1fr 1fr 50px;
```

### 25. Empoisonnez les mauvaises herbes et arrosez vos carottes
Distribuer correctement l'espace en utilisant différentes unités.
```css
grid-template-columns: 75px 6fr 4fr;
```

### 26. Arrosez efficacement votre jardin
Utiliser la propriété `grid-template-rows`. Créer une première ligne sera de 50 pixels, puis trois lignes vides et la dernière ligne prendra tout l'espace restant.
```css
grid-template-rows: 50px 0 0 0 1fr;
```

### 27. Arrosez une région précise de votre jardin
Utiliser la propriété abrégée `grid-template``, pour créer une ligne de hauteur de 60 % et une colonne de largeur de 200 pixels.
```css
grid-template: 60% / 200px;
```

### 28. Arrosez une région précise de votre jardin
Utiliser `grid-template` pour créer une grille qui a deux lignes - la première prend tout l'espace sauf 50 pixels réservés pour la deuxième, et aussi deux colonnes qui divisent la largeur en une pour quatre.
```css
grid-template: 1fr 50px / 1fr 4fr;
```
