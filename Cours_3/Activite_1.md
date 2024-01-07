## Activité 1: [FLEXBOX FROGGY](https://flexboxfroggy.com/#fr)

### 01. Guidez la grenouille vers le nénuphar à droite
Aligne horizontalement les éléments à l'extrémité droite du conteneur.
```css
justify-content: flex-end;
```

### 02. Aidez les grenouilles à rejoindre leur nénuphar au centre
Centre horizontalement les éléments à l'intérieur du conteneur.
```css
justify-content: center;
```

### 03. Aidez les trois grenouilles à trouver leur nénuphar
Crée un espacement égal autour des éléments et entre les éléments et les bords du conteneur.
```css
justify-content: space-around;
```

### 04. Les nénuphars des bords ont maintenant dérivé vers le rivage
Crée un espacement égal entre les éléments, poussant le premier à l'extrémité et le dernier à l'autre extrémité.
```css
justify-content: space-between;
```

### 05. Aidez les grenouilles à atteindre le fond de l'étang
Place verticalement les éléments à l'extrémité basse du conteneur.
```css
align-items: flex-end;
```

### 06. Conduisez la grenouille au centre de l'étang
Centre les éléments horizontalement et verticalement dans le conteneur.
```css
align-items: center;
justify-content: center;
```

### 07. Les grenouilles doivent à nouveau traverser l'étang
Aligne verticalement les éléments en bas et crée un espacement égal autour d'eux.
```css
align-items: flex-end;
justify-content: space-around;
```

### 08. Les grenouilles doivent se mettre dans le même ordre que leurs nénuphars
Inverse l'ordre des éléments horizontalement, de droite à gauche.
```css
flex-direction: row-reverse;
```

### 09. Aidez les grenouilles à trouver leur colonne de nénuphars
Empile les éléments verticalement, de haut en bas.
```css
flex-direction: column;
```

### 10. Aidez les grenouilles à arriver à leur propre nénuphar
Inverse l'ordre horizontal et aligne les éléments à l'extrémité droite.
```css
flex-direction: row-reverse;
justify-content: flex-end;
```

### 11. Aidez les grenouilles à trouver leurs nénuphars
Empile les éléments verticalement, les alignant en bas du conteneur.
```css
flex-direction: column;
justify-content: flex-end;
```

### 12. Aidez les grenouilles à trouver leurs nénuphars
Empile les éléments verticalement de bas en haut, en créant un espacement égal entre eux.
```css
flex-direction: column-reverse;
justify-content: space-between;
```

### 13. Aidez les grenouilles à trouver leurs nénuphars
Aligne les éléments horizontalement de droite à gauche et les centre.
```css
align-items: flex-end;
flex-direction: row-reverse;
justify-content: center;
```

### 14. Réorganisez les grenouilles par rapport à leurs nénuphars
Place un élément spécifique en premier parmi les éléments enfants.
```css
order: 1;
```

### 15. Envoyez la grenouille rouge à son nénuphar
Place un élément spécifique avant ceux avec des valeurs d'ordre plus élevées ou par défaut.
```css
order: -3;
```

### 16. Isolez la grenouille jaune au fond de l'étang
Positionne un élément spécifique à l'extrémité basse du conteneur, même si les autres sont alignés différemment.
```css
align-self: flex-end;
```

### 17. Envoyez les grenouilles jaunes au fond de l'étang vers le rivage
Positionne un élément spécifique en bas, après les éléments avec des valeurs d'ordre inférieures ou par défaut.
```css
align-self: flex-end;
order: 2;
```

### 18. Les grenouilles sont écrasées dans une seule rangée de nénuphars
Autorise les éléments à passer à la ligne suivante s'ils ne rentrent pas sur une seule ligne.
```css
flex-wrap: wrap;
```

### 19. Aidez cette armée de grenouille à former trois belles colonnes
Empile les éléments verticalement, autorisant le passage à la ligne suivante.
```css
flex-direction: column;
flex-wrap: wrap;
```

### 20. Aidez cette armée de grenouille à former trois belles colonnes
Raccourci pour définir `flex-direction` et `flex-wrap` en une seule déclaration.
```css
flex-flow: column wrap;
```

### 21. Les grenouilles sont éparpillées partout dans l'étang, mais les nénuphars sont amassés dans le haut
Aligne toutes les lignes d'éléments au début du conteneur s'il y a de l'espace supplémentaire.
```css
align-content: flex-start;
```

### 22. Le courant a amassé tous les nénuphars dans le bas de l'étang
Aligne toutes les lignes d'éléments à la fin du conteneur s'il y a de l'espace supplémentaire.
```css
align-content: flex-end;
```

### 23. Les grenouilles ont fait la fête, mais elles doivent maintenant retourner à la maison
Centre le contenu des lignes d'éléments, empilant les éléments de bas en haut.
```css
align-content: center;
flex-direction: column-reverse;
```

### 24. Ramenez les grenouilles à la maison une dernière fois
Cette combinaison permet de disposer les éléments en colonnes verticales, les empilant de bas en haut et de droite à gauche, tout en maintenant un espace uniforme entre chaque colonne d'éléments et en les centrant horizontalement dans chaque colonne.
```css
align-content: space-between;
flex-flow: column-reverse wrap-reverse;
justify-content: center;
```
- `align-content: space-between;` répartis l'espace disponible de manière égale entre les lignes d'éléments, en plaçant le premier élément au début et le dernier élément à la fin de chaque ligne, tout en laissant un espace égal entre chaque ligne d'éléments à l'intérieur du conteneur.
- `flex-flow: column-reverse wrap-reverse;` organise les éléments verticalement de bas en haut et autorise les éléments à passer à la ligne suivante si nécessaire, les empilant de haut en bas et de droite à gauche.
- `justify-content: center;` centre horizontalement les éléments à l'intérieur de chaque ligne d'éléments, assurant qu'ils soient alignés au centre de la ligne.
