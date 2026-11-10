# L'interface

## Objectif

Voir comment une interface définit un contrat. Plusieurs classes peuvent l'utiliser.

## Le concept

- `PaymentMethod` déclare la méthode `pay(int $amountCents): string`.
- `CashPayment` et `CardPayment` implémentent cette interface.
- La fonction `checkout()` accepte n'importe quel objet `PaymentMethod`. Elle connaît le contrat, pas la classe.
- Une classe peut implémenter plusieurs interfaces. Mais elle ne peut hériter que d'une seule classe.

## Comment lancer l'exemple

```bash
cd lab-poo
php examples/interface/example.php
```

## Ce que l'on voit

```text
Paiement en espèces : 25,00 EUR
Paiement par carte (****4242) : 48,00 EUR
```

Les deux paiements passent par la même fonction `checkout()`. Ils utilisent la même méthode `pay()`. Mais le code de la méthode est différent.

## Dans le projet

Dans le projet de gestion de restaurants, l'interface `PaymentMethod` permet d'ajouter un nouveau moyen de paiement. On ne change pas le code de la commande.

## À retenir

Une interface dit ce qu'une classe doit faire. Elle ne dit pas comment le faire. Le code reste facile à changer.
