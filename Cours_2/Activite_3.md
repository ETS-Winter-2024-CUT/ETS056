## Cours 2 - Activité 3: [CSS Diner](https://flukeout.github.io/)

### 01. Select the plates
Sélectionne tous les éléments `<plate>`.
```css
plate
```

### 02. Select the bento boxes
Sélectionne tous les éléments `<bento>`.
```css
bento
```

### 03. Select the fancy plate
Sélectionne l'élément avec l'ID `#fancy`.
```css
#fancy
```

### 04. Select the apple on the plate
Sélectionne tous les éléments `<apple>` qui sont enfants directs d'un élément `<plate>`.
```css
plate apple
```

### 05. Select the pickle on the fancy plate
Sélectionne tous les éléments `<pickle>` qui sont des descendants d'un élément `#fancy`.
```css
#fancy pickle
```

### 06. Select the small apples
Sélectionne tous les éléments ayant la classe `.small`.
```css
.small
```

### 07. Select the small oranges
Sélectionne tous les éléments `<orange>` ayant la classe `.small`.
```css
orange.small
```

### 08. Select the small oranges in the bentos
Sélectionne tous les éléments `<orange>` ayant la classe `.small` qui sont des descendants d'un élément `<bento>`.
```css
bento orange.small
```

### 09. Select all the plates and bentos
Sélectionne tous les éléments `<plate>` et `<bento>`.
```css
plate, bento
```

### 10. Select all the things!
Sélectionne tous les éléments de la page.
```css
*
```

### 11. Select everything on a plate
Sélectionne tous les descendants de l'élément `<plate>`.
```css
plate *
```

### 12. Select every apple that's next to a plate
Sélectionne tous les éléments `<apple>` qui sont immédiatement après un élément `<plate>`.
```css
plate + apple
```

### 13. Select the pickles beside the bento
Sélectionne tous les éléments `<pickle>` qui suivent immédiatement un élément `<bento>`.
```css
bento ~ pickle
```

### 14. Select the apple directly on a plate
Sélectionne tous les éléments `<apple>` qui sont des enfants directs d'un élément `<plate>`.
```css
plate > apple
```

### 15. Select the top orange
Sélectionne le premier élément `<orange>` parmi ses frères.
```css
orange:first-child
```

### 16. Select the apple and the pickle on the plates
Sélectionne tous les éléments `<apple>` et `<pickle>` qui sont les seuls enfants de leur parent `<plate>`.
```css
plate apple:only-child, plate pickle:only-child
```

### 17. Select the small apple and the pickle
Sélectionne le dernier élément `<small>` parmi ses frères.
```css
.small:last-child
```

### 18. Select the 3rd plate
Sélectionne le troisième élément `<plate>` parmi ses frères.
```css
plate:nth-child(3)
```

### 19. Select the 1st bento
Sélectionne le troisième élément `<bento>` en partant de la fin parmi ses frères.
```css
bento:nth-last-child(3)
```

### 20. Select first apple
Sélectionne le premier élément du type `<apple>`.
```css
apple:first-of-type
```

### 21. Select all even plates
Sélectionne tous les éléments `<plate>` qui sont à une position paire parmi leurs frères.
```css
plate:nth-of-type(even)
```

### 22. Select every 2nd plate, starting from the 3rd
Sélectionne tous les éléments `<plate>` à partir du troisième élément, compris, en sautant un élément à chaque fois.
```css
plate:nth-of-type(2n+3)
```

### 23. Select the apple on the middle plate
Sélectionne tous les éléments `<apple>` qui sont les seuls éléments de leur type et qui sont des enfants d'un élément `<plate>`.
```css
plate apple:only-of-type
```

### 24. Select the last apple and orange
Sélectionne le dernier élément `<apple>` et le dernier élément `<orange>` de leur type.
```css
orange:last-of-type, apple:last-of-type
```

### 25. Select the empty bentos
Sélectionne tous les éléments `<bento>` qui sont vides.
```css
bento:empty
```

### 26. Select the big apples
Sélectionne tous les éléments `<apple>` qui n'ont pas la classe `.small`.
```css
apple:not(.small)
```

### 27. Select the items for someone
Sélectionne tous les éléments qui ont un attribut `for`.
```css
*[for]
```

### 28. Select the plates for someone
Sélectionne tous les éléments `<plate>` qui ont un attribut `for`.
```css
plate[for]
```

### 29. Select Vitaly's meal
Sélectionne tous les éléments `<bento>` qui ont un attribut `for` égal à "Vitaly".
```css
bento[for="Vitaly"]
```

### 30. Select the items for names that start with 'Sa'
Sélectionne tous les éléments qui ont un attribut `for` commençant par "Sa".
```css
*[for^="Sa"]
```

### 31. Select the items for names that end with 'ato'
Sélectionne tous les éléments qui ont un attribut `for` se terminant par "ato".
```css
*[for$="ato"]
```

### 32. Select the meals for names that contain 'obb'
Sélectionne tous les éléments `<bento>` qui ont un attribut `for` contenant "obb".
```css
bento[for*="obb"]
```
