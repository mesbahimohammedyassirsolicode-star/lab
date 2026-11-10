# Le polymorphisme

## Objectif

Voir qu'un même appel de méthode peut donner des résultats différents. Tout dépend de l'objet.

## Le concept

- `Order` déclare la méthode abstraite `totalCents()`.
- `DineInOrder` ajoute 10 % de service. `TakeawayOrder` ajoute 2,00 EUR d'emballage.
- La boucle `foreach` appelle `totalCents()`. Elle ne connaît pas le type exact de la commande.
- C'est l'objet réel qui choisit le code exécuté.

## Comment lancer l'exemple

```bash
cd lab-poo
php examples/polymorphisme/example.php
```

## Ce que l'on voit

```text
Sur place (service 10 %) -> total : 110,00 EUR
À emporter (emballage 2,00 EUR) -> total : 97,00 EUR
```

Les deux objets sont traités par le même code. Mais le total est calculé d'une façon différente.

## Dans le projet

Dans le projet de gestion de restaurants, le polymorphisme permet de faire des prix différents selon le type de commande. On n'a pas besoin de mettre des `if` partout.

## À retenir

Le polymorphisme repose sur un contrat commun. Ce contrat peut être une classe abstraite ou une interface. Chaque sous-classe écrit sa propre version.
