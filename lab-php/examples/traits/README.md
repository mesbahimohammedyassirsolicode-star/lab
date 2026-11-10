# Trait

## Objectif

Cet exemple montre comment réutiliser un même comportement entre plusieurs classes avec un trait.

## Concept

Un `trait` contient des méthodes que l'on peut réutiliser dans plusieurs classes.

Ici, le trait `Loggable` fournit une méthode `log()` utilisée par :

- `UserService`
- `OrderService`

Cela évite de dupliquer le même code dans plusieurs classes.

## Comment exécuter

```bash
cd lab-php
php examples/traits/example.php
```

## Ce que vous observez

Chaque classe utilise le même trait et affiche un message de log avant d'exécuter sa logique métier.

## Cas d'usage

Les traits sont utiles pour :

- la journalisation ;
- la validation ;
- la gestion de cache ;
- les méthodes communes à plusieurs classes.

## À retenir

Le trait est une solution de réutilisation de code sans dépendre de l'héritage multiple.
