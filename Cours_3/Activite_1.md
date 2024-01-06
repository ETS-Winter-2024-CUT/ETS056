## Activité 1: [FLEXBOX FROGGY](https://flexboxfroggy.com/#fr)

### 01. Guidez la grenouille vers le nénuphar à droite
Alignement horizontal des éléments enfants à l'intérieur de leur conteneur en les plaçant à l'extrémité droite du conteneur.
```css
justify-content: flex-end;
```

### 02. Aidez les grenouilles à rejoindre leur nénuphar au centre
Alignement horizontal des éléments enfants à l'intérieur de leur conteneur en les plaçant au centre du conteneur.
```css
justify-content: center;
```

### 03. Aidez les trois grenouilles à trouver leur nénuphar
Alignement horizontal des éléments enfants à l'intérieur de leur conteneur.
Cette propriété crée un espacement égal autour de chaque élément enfant, ainsi qu'entre les éléments et les bords du conteneur, distribuant l'espace restant de manière égale.
```css
justify-content: space-around;
```

### 04. Les nénuphars des bords ont maintenant dérivé vers le rivage
Alignement horizontal des éléments enfants à l'intérieur de leur conteneur.
Cette propriété crée un espacement égal entre chaque élément enfant, en poussant le premier élément vers le début du conteneur et le dernier élément vers la fin du conteneur, sans espace avant le premier ou après le dernier élément.
```css
justify-content: space-between;
```

### 05. Aidez les grenouilles à atteindre le fond de l'étang
Alignement vertical des éléments enfants à l'intérieur de leur conteneur.
Cette propriété place les éléments enfants à l'extrémité basse du conteneur, les alignant sur leur bord inférieur.
```css
align-items: flex-end;
```

### 06. Conduisez la grenouille au centre de l'étang
Centralisation ***horizontale et verticale*** des éléments enfants à l'intérieur de leur conteneur.
```css
align-items: center;
justify-content: center;
```

### 07. Les grenouilles doivent à nouveau traverser l'étang
Alignement vertical des éléments enfants à l'extrémité basse du conteneur tout en répartissant l'espace disponible de manière égale autour des éléments, créant ainsi un espacement uniforme entre les éléments et les bords du conteneur, ainsi qu'entre les éléments eux-mêmes.
```css
align-items: flex-end;
justify-content: space-around;
```

### 08. Les grenouilles doivent se mettre dans le même ordre que leurs nénuphars
Inversion de l'ordre des éléments horizontalement, plaçant les éléments de droite à gauche plutôt que de gauche à droite.
```css
flex-direction: row-reverse;
```

### 09. Aidez les grenouilles à trouver leur colonne de nénuphars
Organisation des éléments verticalement, empilant les éléments de haut en bas plutôt que de gauche à droite.
```css
flex-direction: column;
```

### 10. Aidez les grenouilles à arriver à leur propre nénuphar
Inversion de l'ordre des éléments horizontalement, les plaçant de droite à gauche tout en les alignant à l'extrémité droite du conteneur.
```css
flex-direction: row-reverse;
justify-content: flex-end;
```

### 11. Aidez les grenouilles à trouver leurs nénuphars
Organisation des éléments verticalement, les empilant de haut en bas, tout en les alignant à l'extrémité basse du conteneur.
```css
flex-direction: column;
justify-content: flex-end;
```

### 12. Aidez les grenouilles à trouver leurs nénuphars
Organisation des éléments verticalement, les empilant de bas en haut, tout en créant un espacement égal entre chaque élément ainsi qu'entre le premier et le dernier élément, distribuant l'espace restant de manière égale à l'intérieur du conteneur.
```css
flex-direction: column-reverse;
justify-content: space-between;
```

### 13. Aidez les grenouilles à trouver leurs nénuphars
Disposition des éléments de droite à gauche et centralisation horizontale à l'intérieur du conteneur.
```css
align-items: flex-end;
flex-direction: row-reverse;
justify-content: center;
```

### 14. Réorganisez les grenouilles par rapport à leurs nénuphars
Place un élément donné en premier parmi les éléments enfants.
```css
order: 1;
```

### 15. Envoyez la grenouille rouge à son nénuphar
Affichage avant les éléments ayant des valeurs order plus élevées ou des valeurs par défaut.
```css
order: -3;
```

### 16. Isolez la grenouille jaune au fond de l'étang
Alignement vertical d'un élément enfant à l'intérieur du conteneur, le positionnant à l'extrémité basse du conteneur, même si l'alignement vertical des autres éléments est différent.
```css
align-self: flex-end;
```

### 17. Envoyez les grenouilles jaunes au fond de l'étang vers le rivage
Alignement d'un élément spécifique à l'extrémité basse du conteneur, en ignorant l'alignement vertical des autres éléments.
De plus, cet élément sera positionné après les éléments ayant une valeur order inférieure ou par défaut.
```css
align-self: flex-end;
order: 2;
```

### 18. Les grenouilles sont écrasées dans une seule rangée de nénuphars
Spécification que si les éléments enfants sont autorisés à passer à la ligne suivante s'ils ne rentrent pas tous sur une seule ligne à l'intérieur du conteneur.
```css
flex-wrap: wrap;
```

### 19. Aidez cette armée de grenouille à former trois belles colonnes
Organisation verticale des éléments, empilant les éléments de haut en bas, et autorise les éléments à passer à la ligne suivante (si nécessaire) pour s'adapter à l'espace disponible dans le conteneur.
```css
flex-direction: column;
flex-wrap: wrap;
```

### 20. Aidez cette armée de grenouille à former trois belles colonnes
Propriété raccourcie pour définir à la fois `flex-direction` et `flex-wrap` en une seule déclaration.
```css
flex-flow: column wrap;
```

### 21. Les grenouilles sont éparpillées partout dans l'étang, mais les nénuphars sont amassés dans le haut
Alignement de l'ensemble des lignes d'éléments dans le conteneur, depuis son début, lorsque ces lignes ont de l'espace supplémentaire sur l'un des axes du conteneur.
```css
align-content: flex-start;
```

### 22. Le courant a amassé tous les nénuphars dans le bas de l'étang
Alignement de l'ensemble des lignes d'éléments dans le conteneur, depuis sa fin, lorsque ces lignes ont de l'espace supplémentaire sur l'un des axes du conteneur.
```css
align-content: flex-end;
```

### 23. Les grenouilles ont fait la fête, mais elles doivent maintenant retourner à la maison
Alignement du contenu des lignes d'éléments au centre du conteneur tout en empilant les éléments de bas en haut.
```css
align-content: center;
flex-direction: column-reverse;
```

### 24. Ramenez les grenouilles à la maison une dernière fois
Cette combinaison crée un agencement où les éléments sont disposés verticalement de bas en haut, empilés de droite à gauche, avec un espacement égal entre chaque ligne et une centrage horizontal au sein de chaque ligne d'éléments.
```css
align-content: space-between;
flex-flow: column-reverse wrap-reverse;
justify-content: center;
```
- `align-content: space-between;` répartis l'espace disponible de manière égale entre les lignes d'éléments, en plaçant le premier élément au début et le dernier élément à la fin de chaque ligne, tout en laissant un espace égal entre chaque ligne d'éléments à l'intérieur du conteneur.
- `flex-flow: column-reverse wrap-reverse;` organise les éléments verticalement de bas en haut et autorise les éléments à passer à la ligne suivante si nécessaire, les empilant de haut en bas et de droite à gauche.
- `justify-content: center;` centre horizontalement les éléments à l'intérieur de chaque ligne d'éléments, assurant qu'ils soient alignés au centre de la ligne.
