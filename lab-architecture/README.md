# lab-architecture : Découvrir les architectures PHP

Dans ce lab, vous découvrez des méthodes pour organiser le code d'une application PHP. Vous apprenez à séparer les rôles du code et à partager les traitements utiles.

## 1. Besoin du projet technique

Le problème : quand une application PHP grandit, le code de l'affichage, des règles métier et de l'accès aux données peut se mélanger. Cela rend les changements et les tests plus difficiles.

Pourquoi ce lab est nécessaire : une architecture claire aide à comprendre où placer chaque partie du code et comment les faire collaborer.

Ce que ça apporte au projet technique : un code plus lisible, plus facile à tester et à faire évoluer.

L'IA peut améliorer : proposer des schémas simples, des tests pratiques et un mini-projet qui relie les notions.

## 2. Notions et techniques à apprendre

Notions de base :
- Architecture 3-tiers : séparer la présentation, la logique métier et les données.
- DAO (Data Access Object) : isoler le code qui lit ou écrit les données.
- Service : organiser les traitements et les règles métier.
- BaseService : partager des traitements communs entre plusieurs services.

Techniques :
- Placer chaque responsabilité dans la bonne couche.
- Utiliser un DAO depuis un Service sans mélanger les rôles.
- Créer une classe BaseService pour factoriser un traitement commun.
- Tester chaque notion avec un exemple lié au projet technique.

Pour chaque notion, présenter son rôle, un exemple simple et un test pratique lié au projet technique.

L'IA peut améliorer : créer un schéma de l'architecture, un glossaire simple et des exercices guidés.

## 3. Réalisation attendue

Forme :
- Un dossier d'exemple par notion, avec le code PHP et un README court.
- Un README principal avec un tableau de synthèse.

| Notion | Exemple | Test pratique |
| --- | --- | --- |
| Architecture 3-tiers | `examples/architecture-3-tiers/example.php` | Afficher un produit trouvé et un produit absent. |
| DAO | `examples/dao/example.php` | Lire deux identifiants, dont un absent. |
| Service | `examples/service/example.php` | Vérifier la recherche et le message pour un produit absent. |
| BaseService | `examples/base-service/example.php` | Réutiliser la validation d'identifiant dans deux services. |

Contenu de l'exemple pratique :
- Des exemples PHP commentés qui montrent le rôle de chaque notion.
- Des tests pratiques liés au projet technique, avec les résultats attendus.
- Un exemple intégrateur qui montre les couches et les services ensemble.

L'IA est libre de proposer des tests automatisés ou un petit schéma si cela aide à comprendre les notions.

## Démarrage & Validation

- **Prérequis :** PHP 8.0 ou plus. Une base de données n'est pas nécessaire pour les exemples initiaux; un stockage simulé peut servir aux tests.
- **Critères de succès :** chaque notion a un rôle expliqué, un exemple exécutable et un test pratique lié au projet technique. L'exemple intégrateur respecte la séparation des responsabilités.
