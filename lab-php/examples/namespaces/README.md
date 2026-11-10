# Le namespace

## Objectif

Voir comment on range les classes dans des espaces de noms différents. On évite les problèmes de noms.

## Le concept

Un namespace regroupe des classes par domaine.

Exemple :

- `App\Models` pour les modèles ;
- `App\Utils` pour les outils.

Comme ça, on peut avoir deux classes avec le même nom dans le même projet.

## Comment lancer l'exemple

```bash
cd lab-php
php examples/namespaces/example.php
```

## Ce que l'on voit

- La classe `User` est créée dans `App\Models`.
- La classe `Formatter` est créée dans `App\Utils`.
- Le code principal importe les classes avec `use`. Ensuite, il les utilise sans problème.

## Dans le projet

Les namespaces sont utiles pour :

- les applications de taille moyenne ou grande ;
- les projets avec plusieurs modules ;
- les bibliothèques et les frameworks.

## À retenir

Les namespaces rendent le code plus lisible, plus rangé et plus sûr.
