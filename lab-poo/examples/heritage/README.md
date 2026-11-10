# Héritage

## Objectif

Montrer comment une classe enfant réutilise les propriétés et les méthodes d'une classe parente.

## Concept

- `Order` contient la référence, les articles et le calcul du total.
- `DineInOrder` et `TakeawayOrder` étendent `Order` avec `extends`.
- Les deux classes appellent `parent::__construct()` et `parent::describe()` pour réutiliser le comportement commun.
- Chaque sous-classe ajoute une information propre : le numéro de table ou le nom du client.

## Comment exécuter

```bash
cd lab-poo
php examples/heritage/example.php
```

## Ce que vous observez

```text
CMD-001 (2 article(s)) : 100,00 EUR - sur place, table 12
CMD-002 (1 article(s)) : 95,00 EUR - à emporter pour Aymane
```

Les méthodes `addItem()` et `totalCents()` sont définies une seule fois dans `Order` et réutilisées par les deux sous-classes.

## Cas d'usage

Dans le projet de gestion de restaurants, une commande sur place et une commande à emporter partagent le même socle, mais ajoutent des informations différentes.

## À retenir

L'héritage exprime une relation « est un ». Utilisez-le lorsque la classe enfant est réellement une spécialisation de la classe parente.
