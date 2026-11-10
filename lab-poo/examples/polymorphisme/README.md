# Polymorphisme

## Objectif

Montrer qu'un même appel de méthode peut produire des comportements différents selon l'objet réel.

## Concept

- `Order` déclare la méthode abstraite `totalCents()`.
- `DineInOrder` ajoute 10 % de service, tandis que `TakeawayOrder` ajoute 2,00 EUR d'emballage.
- La boucle `foreach` appelle `totalCents()` sans connaître le type concret de chaque commande.
- C'est le type réel de l'objet qui choisit l'implémentation exécutée.

## Comment exécuter

```bash
cd lab-poo
php examples/polymorphisme/example.php
```

## Ce que vous observez

```text
Sur place (service 10 %) -> total : 110,00 EUR
À emporter (emballage 2,00 EUR) -> total : 97,00 EUR
```

Les deux objets sont traités par le même code, mais le total est calculé différemment.

## Cas d'usage

Dans le projet de gestion de restaurants, le polymorphisme permet d'appliquer des règles de prix différentes selon le type de commande sans multiplier les conditions `if`.

## À retenir

Le polymorphisme repose sur un contrat commun (classe abstraite ou interface) et sur des implémentations spécialisées.
