# L'héritage

## Objectif

Voir comment une classe enfant réutilise le code de la classe parent.

## Le concept

- `Order` contient la référence, les articles et le calcul du total.
- `DineInOrder` et `TakeawayOrder` étendent `Order` avec `extends`.
- Les deux classes appellent `parent::__construct()` et `parent::describe()`. Elles réutilisent le code commun.
- Chaque sous-classe ajoute une information. Pour `DineInOrder`, c'est le numéro de table. Pour `TakeawayOrder`, c'est le nom du client.

## Comment lancer l'exemple

```bash
cd lab-poo
php examples/heritage/example.php
```

## Ce que l'on voit

```text
CMD-001 (2 article(s)) : 100,00 EUR - sur place, table 12
CMD-002 (1 article(s)) : 95,00 EUR - à emporter pour Aymane
```

Les méthodes `addItem()` et `totalCents()` sont écrites une seule fois. Elles sont dans `Order`. Les deux sous-classes les utilisent.

## Dans le projet

Dans le projet de gestion de restaurants, une commande sur place et une commande à emporter ont le même socle. Elles ont des informations différentes.

## À retenir

L'héritage veut dire « est un ». Utilisez-le quand la classe enfant est vraiment une spécialisation de la classe parent.
