# Encapsulation

## Objectif

Montrer comment des propriétés privées protègent l'état interne d'un objet.

## Concept

- `RestaurantTable` garde `number`, `seats` et `reservedSeats` privés.
- `reserve()` valide le nombre de personnes et empêche de dépasser la capacité.
- `getAvailableSeats()` expose une information calculée sans révéler l'état brut.
- L'état ne peut pas être modifié directement depuis l'extérieur de la classe.

## Comment exécuter

```bash
cd lab-poo
php examples/encapsulation/example.php
```

## Ce que vous observez

```text
Table 12 - places disponibles : 4
Table 12 : 2 place(s) réservée(s).
Places disponibles : 2
Réservation refusée : Pas assez de places disponibles.
```

La deuxième réservation est refusée : la capacité de la table serait dépassée.

## Cas d'usage

Dans le projet de gestion de restaurants, l'encapsulation garantit qu'une table ne peut jamais être réservée au-delà de sa capacité, même si le reste de l'application évolue.

## À retenir

L'encapsulation protège les invariants de l'objet. Les propriétés privées et les méthodes publiques forment une frontière contrôlée.
