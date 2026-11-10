# lab-php

## 1. Besoin du projet technique

Le problème : le code PHP devient vite difficile à lire et à maintenir quand il grandit. Les noms se répètent, les erreurs ne sont pas claires, et le code se duplique.

Pourquoi ce lab est nécessaire : il montre des outils simples de PHP 8 pour structurer le code. Le lab aide à écrire du code propre, lisible et réutilisable.

Ce que ça apporte au projet technique : 
- Moins de bugs grâce à une gestion claire des erreurs.
- Un code organisé avec les namespaces.
- Moins de duplication avec les traits.

L’IA peut améliorer : choisir de meilleurs exemples concrets, ajouter des tests simples, ou connecter les 3 notions dans un mini-projet.

## 2. Notions et techniques à apprendre

Notions de base :
- Les erreurs et exceptions en PHP : try / catch / finally
- Les namespaces : organiser le code par dossiers logiques
- Les traits : partager des méthodes entre classes sans héritage multiple

Techniques :
- Détecter et traiter les erreurs proprement
- Éviter les conflits de noms
- Réutiliser du code de façon sûre

L’IA peut améliorer : ajouter schémas simples, un glossaire A1, ou des exercices guidés.

## 3. Réalisation attendue

Forme :
- 3 dossiers d’exemples, un par notion
- Chaque dossier contient `example.php` et un `README.md` court
- Un README principal qui résume tout

Contenu de l’exemple pratique :
- Un script qui montre la notion en action
- Un commentaire simple qui explique le « pourquoi »
- Une commande claire pour lancer l’exemple

L’IA est libre de proposer : un mini-projet qui utilise les 3 notions ensemble, des tests, ou une petite démo web.

## Démarrage rapide

Il faut PHP 8.0 ou plus. Les exemples ont été testés avec PHP 8.4.25.

Depuis la racine du dépôt :

```bash
cd lab-php
php -v
php -r "echo 'Hello, PHP!', PHP_EOL;"
```

Pour lancer un exemple, on reste dans le dossier `lab-php` :

```bash
php examples/gestion-erreurs/example.php
php examples/namespaces/example.php
php examples/traits/example.php
```

Chaque dossier d'exemple contient un `README.md`. Il explique la notion et la commande pour lancer l'exemple.

## Présentation

Le plan de la présentation se trouve dans [presentation.md](./presentation.md).
