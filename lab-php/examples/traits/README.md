# Le trait

## Objectif

Voir comment plusieurs classes réutilisent le même comportement avec un trait.

## Le concept

Un `trait` contient des méthodes. On peut les réutiliser dans plusieurs classes.

Dans cet exemple, le trait `Loggable` donne la méthode `log()`. Elle est utilisée par :

- `UserService`
- `OrderService`

Comme ça, on ne répète pas le même code dans plusieurs classes.

## Comment lancer l'exemple

```bash
cd lab-php
php examples/traits/example.php
```

## Ce que l'on voit

Chaque classe utilise le même trait. Elle affiche un message de log avant de faire son travail.

## Dans le projet

Les traits sont utiles pour :

- la journalisation ;
- la validation ;
- le cache ;
- les méthodes communes à plusieurs classes.

## À retenir

Le trait est une façon de réutiliser du code. On n'a pas besoin de l'héritage multiple.
