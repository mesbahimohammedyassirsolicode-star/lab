# lab-poo

## 1. Besoin du projet technique

Le problème : le projet de gestion de restaurants grandit. Sans POO, le code est difficile à organiser, à tester et à réutiliser.

Pourquoi ce lab est nécessaire : il montre les bases de la programmation orientée objet en PHP, avec des exemples concrets liés aux restaurants.

Ce que ça apporte au projet technique :
- Code plus clair et modulaire
- Réutilisation via héritage et interfaces
- Sécurité des données via encapsulation
- Flexibilité via polymorphisme

L'IA peut améliorer : connecter les 6 notions dans un mini-domaine cohérent, ajouter des tests, ou préparer une migration vers Laravel.

## 2. Notions et techniques à apprendre

Notions de base :
- Classe abstraite : modèle non instanciable
- Interface : contrat de méthodes
- Héritage : réutiliser propriétés/méthodes
- Polymorphisme : même appel, comportements différents
- Encapsulation : protéger les données
- Méthodes/propriétés statiques : logique liée à la classe

Techniques :
- Modéliser un domaine avec des classes
- Choisir entre abstraction, interface et héritage
- Cacher l'état interne, exposer une API claire
- Utiliser le statique à bon escient

L'IA peut améliorer : glossaire A1, schémas UML simplifiés, exercices guidés.

## 3. Réalisation attendue

Forme :
- 6 dossiers d'exemples, un par notion
- Chaque dossier contient `example.php` et un `README.md`
- Un tableau de synthèse dans le README principal

Contenu de l'exemple pratique :
- Script PHP simple qui démontre la notion
- Contexte restaurant : carte, commande, paiement, table
- Commentaire qui explique le « pourquoi »

L'IA est libre de proposer : un mini-projet qui utilise les 6 notions ensemble, des tests, ou une base pour Laravel.

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
