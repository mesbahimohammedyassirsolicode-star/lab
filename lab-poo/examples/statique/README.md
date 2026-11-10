# Méthodes et propriétés statiques

## Objectif

Montrer comment une propriété et une méthode statiques appartiennent à la classe elle-même.

## Concept

- `OrderNumber` possède une propriété statique `$sequence` partagée par tous les appels.
- `next()` incrémente cette séquence et renvoie une référence unique.
- `generated()` lit la valeur courante sans créer d'instance.
- Les membres statiques sont appelés avec `OrderNumber::next()`, pas avec `$objet->next()`.

## Comment exécuter

```bash
cd lab-poo
php examples/statique/example.php
```

## Ce que vous observez

```text
CMD-0001
CMD-0002
CMD-0003
Numéros générés : 3
```

Chaque appel à `next()` produit un numéro différent, car la séquence est partagée au niveau de la classe.

## Cas d'usage

Dans le projet de gestion de restaurants, un générateur statique de références permet d'attribuer un numéro unique aux commandes sans dépendre d'une instance particulière.

## À retenir

Utilisez le statique pour un état ou un comportement réellement lié à la classe. Abuser des membres statiques rend le code plus difficile à tester et à faire évoluer.
