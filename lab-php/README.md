# lab-php

## Objectifs

Ce lab présente trois notions de PHP. Chaque notion a un exemple court. On peut le lancer dans le terminal.

- **La gestion des erreurs et des exceptions :** trouver une situation impossible. On la traite avec `try`, `catch` et `finally`.
- **Les namespaces :** ranger les classes. On évite les problèmes de noms.
- **Les traits :** réutiliser le même code dans plusieurs classes. On n'utilise pas l'héritage multiple.

Les exemples sont des démonstrations seules. Ils ne sont pas dans une application.

## Démarrage rapide

Il faut PHP 8.0 ou plus. Les exemples ont été testés avec PHP 8.4.25.

Depuis la racine du dépôt :

```bash
cd lab-php
php -v
php -r "echo 'Hello, PHP!', PHP_EOL;"
```

Pour lancer un exemple, on reste dans le dossier `lab-php` :

```bash
php examples/gestion-erreurs/example.php
php examples/namespaces/example.php
php examples/traits/example.php
```

Chaque dossier d'exemple contient un `README.md`. Il explique la notion et la commande pour lancer l'exemple.

## Présentation

Le plan de la présentation se trouve dans [presentation.md](./presentation.md).
