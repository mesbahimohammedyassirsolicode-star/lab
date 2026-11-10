# La gestion des erreurs et des exceptions

## Objectif

Voir comment on trouve une erreur avec `try`, `catch` et `finally` en PHP.

## Le concept

- `try` contient le code qui peut échouer.
- `catch` récupère l'exception. Il affiche un message clair.
- `finally` s'exécute toujours. Il s'exécute même s'il y a une exception.

## Comment lancer l'exemple

```bash
cd lab-php
php examples/gestion-erreurs/example.php
```

## Ce que l'on voit

Le script commence avec un âge valide. Après, il essaie un âge invalide.

Quand `verifierAge(-2)` est appelé, une exception est lancée. Le bloc `catch` la récupère.

Le bloc `finally` s'exécute après. Il confirme le nettoyage.

## Dans le projet

C'est utile pour :

- vérifier les données d'un formulaire ;
- gérer un accès interdit ;
- protéger une opération importante.

## À retenir

On ne doit pas ignorer une exception. On la traite à la frontière de l'application.
