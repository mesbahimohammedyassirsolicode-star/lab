# lab-poo

## Objectifs

Ce lab présente six notions de la programmation orientée objet (POO) en PHP.
Chaque notion a un exemple simple. On peut le lancer directement dans le terminal.

- **Classe abstraite :** créer un modèle. On ne peut pas l'utiliser directement.
- **Interface :** définir les méthodes qu'une classe doit avoir.
- **Héritage :** réutiliser les propriétés et les méthodes d'une autre classe.
- **Polymorphisme :** utiliser la même méthode. Le résultat dépend de l'objet.
- **Encapsulation :** protéger les données d'une classe.
- **Méthodes et propriétés statiques :** utiliser des éléments liés à la classe.

Les exemples sont des démonstrations seules. Ils sont liés au projet de gestion de restaurants : la carte, les commandes, les paiements et les tables. Ces exemples ne sont pas dans l'application Laravel.

## Démarrage rapide

Il faut PHP 8.0 ou plus. Les exemples ont été testés avec PHP 8.4.25.

Depuis la racine du dépôt :

```bash
cd lab-poo
php -v
php -r "echo 'Hello, PHP!', PHP_EOL;"
```

Pour lancer un exemple, on reste dans le dossier `lab-poo` :

```bash
php examples/classe-abstraite/example.php
php examples/interface/example.php
php examples/heritage/example.php
php examples/polymorphisme/example.php
php examples/encapsulation/example.php
php examples/statique/example.php
```

Chaque dossier d'exemple contient un `README.md`. Il explique la notion, le résultat attendu et le lien avec le projet de restaurants.

## Structure

| Notion | Exemple | Explication |
| --- | --- | --- |
| Classe abstraite | `examples/classe-abstraite/example.php` | `examples/classe-abstraite/README.md` |
| Interface | `examples/interface/example.php` | `examples/interface/README.md` |
| Héritage | `examples/heritage/example.php` | `examples/heritage/README.md` |
| Polymorphisme | `examples/polymorphisme/example.php` | `examples/polymorphisme/README.md` |
| Encapsulation | `examples/encapsulation/example.php` | `examples/encapsulation/README.md` |
| Statique | `examples/statique/example.php` | `examples/statique/README.md` |

## Présentation

Le plan de la présentation se trouve dans [presentation.md](./presentation.md).
