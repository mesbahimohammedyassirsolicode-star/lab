# Interface

## Objectif

Montrer comment une interface définit un contrat que plusieurs classes peuvent implémenter.

## Concept

- `PaymentMethod` déclare la méthode `pay(int $amountCents): string`.
- `CashPayment` et `CardPayment` implémentent cette interface.
- La fonction `checkout()` accepte n'importe quel objet de type `PaymentMethod` : elle dépend du contrat, pas d'une classe précise.
- Une classe peut implémenter plusieurs interfaces, mais elle ne peut hériter que d'une seule classe.

## Comment exécuter

```bash
cd lab-poo
php examples/interface/example.php
```

## Ce que vous observez

```text
Paiement en espèces : 25,00 EUR
Paiement par carte (****4242) : 48,00 EUR
```

Les deux paiements passent par la même fonction `checkout()` et la même méthode `pay()`, avec une implémentation différente.

## Cas d'usage

Dans le projet de gestion de restaurants, l'interface `PaymentMethod` permet d'ajouter un nouveau moyen de paiement sans modifier la logique de commande.

## À retenir

Une interface décrit ce qu'une classe doit faire, pas comment elle le fait. Elle favorise un code souple et interchangeable.
