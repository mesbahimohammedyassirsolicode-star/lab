# Gestion des erreurs et des exceptions

## Objectif

Cette exemple montre comment capturer une erreur avec `try`, `catch` et `finally` en PHP.

## Concept

- `try` contient le code qui peut échouer.
- `catch` récupère l'exception et affiche un message clair.
- `finally` s'exécute toujours, même si une exception est levée.

## Comment exécuter

```bash
cd lab-php
php examples/gestion-erreurs/example.php
```

## Ce que vous observez

Le script commence par un âge valide puis tente un âge invalide.

Lorsque `verifierAge(-2)` est appelé, une exception est levée et capturée par le bloc `catch`.

Le bloc `finally` s'exécute ensuite pour confirmer le nettoyage.

## Cas d'usage

Ceci est utile pour :

- valider des données utilisateur ;
- gérer des accès non autorisés ;
- sécuriser les opérations sensibles.

## À retenir

Une exception ne doit pas être ignorée : il faut la traiter proprement à la frontière de l'application.
