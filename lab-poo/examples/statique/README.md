# Les méthodes et les propriétés statiques

## Objectif

Voir comment une propriété et une méthode statiques appartiennent à la classe. Elles n'appartiennent pas à un objet.

## Le concept

- `OrderNumber` a la propriété statique `$sequence`. Tous les appels la partagent.
- `next()` augmente cette séquence. Il donne une nouvelle référence.
- `generated()` lit la valeur actuelle. Il ne crée pas d'objet.
- On appelle un membre statique avec `OrderNumber::next()`. On ne l'appelle pas avec `$objet->next()`.

## Comment lancer l'exemple

```bash
cd lab-poo
php examples/statique/example.php
```

## Ce que l'on voit

```text
CMD-0001
CMD-0002
CMD-0003
Numéros générés : 3
```

Chaque appel à `next()` donne un numéro différent. La séquence est partagée au niveau de la classe.

## Dans le projet

Dans le projet de gestion de restaurants, un générateur statique donne un numéro unique à chaque commande. Il ne dépend pas d'une instance particulière.

## À retenir

Utilisez le statique pour un état ou une aide liée à la classe. Trop de statique rend le code difficile à tester et à faire évoluer.
