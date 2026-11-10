# Classe abstraite

## Objectif

Montrer comment une classe abstraite sert de modèle commun à plusieurs classes concrètes.

## Concept

- `MenuItem` est déclarée `abstract` : elle ne peut pas être instanciée directement.
- Elle définit une méthode abstraite `category()` que chaque sous-classe doit implémenter.
- Elle fournit aussi des méthodes concrètes (`price()` et `label()`) réutilisées par les sous-classes.
- `Dish` et `Drink` héritent de `MenuItem` et fournissent chacune leur catégorie.

## Comment exécuter

```bash
cd lab-poo
php examples/classe-abstraite/example.php
```

## Ce que vous observez

Le script crée un plat et une boisson, puis affiche une ligne formatée pour chacun :

```text
[Plat] Tajine poulet - 85,00 EUR
[Boisson] Thé à la menthe - 15,00 EUR
```

La ligne `new MenuItem(...)` est commentée : la décommenter provoque une erreur fatale, car une classe abstraite ne peut pas être instanciée.

## Cas d'usage

Dans le projet de gestion de restaurants, une classe abstraite `MenuItem` permet de traiter les plats et les boissons de la même manière, tout en imposant que chaque type fournisse sa catégorie.

## À retenir

Une classe abstraite partage du code concret et impose un contrat partiel. Elle se situe entre une classe ordinaire et une interface.
