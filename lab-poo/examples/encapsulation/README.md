# L'encapsulation

## Objectif

Voir comment des propriétés privées protègent les données d'un objet.

## Le concept

- `RestaurantTable` garde `number`, `seats` et `reservedSeats` en privé.
- `reserve()` vérifie le nombre de personnes. Il refuse de dépasser la capacité.
- `getAvailableSeats()` donne une information calculée. Elle ne montre pas l'état brut.
- On ne peut pas changer l'état directement depuis l'extérieur de la classe.

## Comment lancer l'exemple

```bash
cd lab-poo
php examples/encapsulation/example.php
```

## Ce que l'on voit

```text
Table 12 - places disponibles : 4
Table 12 : 2 place(s) réservée(s).
Places disponibles : 2
Réservation refusée : Pas assez de places disponibles.
```

La deuxième réservation est refusée. La capacité de la table serait dépassée.

## Dans le projet

Dans le projet de gestion de restaurants, l'encapsulation garantit qu'une table ne peut jamais être réservée au-delà de sa capacité. C'est vrai même si le reste de l'application change.

## À retenir

L'encapsulation protège les règles de l'objet. Les propriétés privées et les méthodes publiques font une limite claire.
