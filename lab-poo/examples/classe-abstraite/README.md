# La classe abstraite

## Objectif

Voir comment une classe abstraite sert de modèle pour d'autres classes.

## Le concept

- `MenuItem` est une classe `abstract`. On ne peut pas créer un objet `MenuItem` directement.
- `MenuItem` a une méthode abstraite `category()`. Chaque sous-classe doit l'écrire.
- `MenuItem` a aussi des méthodes normales : `price()` et `label()`. Les sous-classes les réutilisent.
- `Dish` et `Drink` héritent de `MenuItem`. Chacune donne sa catégorie.

## Comment lancer l'exemple

```bash
cd lab-poo
php examples/classe-abstraite/example.php
```

## Ce que l'on voit

Le script crée un plat et une boisson. Il affiche une ligne pour chacun :

```text
[Plat] Tajine poulet - 85,00 EUR
[Boisson] Thé à la menthe - 15,00 EUR
```

La ligne `new MenuItem(...)` est commentée. Si on enlève le commentaire, PHP donne une erreur fatale. Une classe abstraite ne peut pas être instanciée.

## Dans le projet

Dans le projet de gestion de restaurants, la classe abstraite `MenuItem` permet de traiter les plats et les boissons de la même façon. Chaque type doit quand même dire sa catégorie.

## À retenir

Une classe abstraite partage du code déjà écrit. Elle impose aussi une partie du contrat. Elle se trouve entre la classe normale et l'interface.
