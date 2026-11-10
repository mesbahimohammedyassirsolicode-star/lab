# Namespace

## Objectif

Cet exemple montre comment organiser des classes dans des espaces de noms différents pour éviter les conflits de noms.

## Concept

Un namespace permet de regrouper des classes par domaine fonctionnel.

Exemple :

- `App\Models` pour les modèles ;
- `App\Utils` pour les utilitaires.

Cela évite d'avoir deux classes portant le même nom dans le même projet.

## Comment exécuter

```bash
cd lab-php
php examples/namespaces/example.php
```

## Ce que vous observez

- La classe `User` est créée dans `App\Models`.
- La classe `Formatter` est créée dans `App\Utils`.
- Le code principal importe les classes avec `use` puis les utilise sans conflit.

## Cas d'usage

Les namespaces sont indispensables dans :

- les applications de taille moyenne ou grande ;
- les projets qui combinent plusieurs modules ;
- les bibliothèques ou frameworks.

## À retenir

Les namespaces rendent le code plus lisible, plus organisé et plus sûr.
