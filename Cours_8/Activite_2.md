## Activité 2 : [Observer les cookies 🍪](Exemple_5/index.php)

Dans cette activité on cherche a ajouter la date de la derniere visite du site :

```php
setcookie('derniere_visite', date('c'), time() + (86400 * 30));
```
