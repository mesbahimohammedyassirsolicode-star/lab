# Lab : Découvrir les architectures PHP

Présenté par : Mohammed Yassir Mesbahi  
Encadrant : ES-SARRAJ Fouad  
Date : à compléter

---

## Plan

1. Stack technique
2. Définitions des notions
3. Besoin et problème
4. Architecture proposée
5. Exemples et tests pratiques
6. Résultats et apprentissages

---

## Stack technique

- PHP 8.x : langage utilisé pour les exemples.
- PHPUnit : outil de test, si retenu pour les exemples.
- Stockage en mémoire ou base de données : choix à préciser selon le projet technique.

Les versions et outils devront être confirmés avant la réalisation des exemples.

---

## Définitions

- **Architecture 3-tiers** : séparation entre présentation, logique métier et accès aux données.
- **DAO (Data Access Object)** : objet qui regroupe les opérations d'accès aux données.
- **Service** : classe qui porte des traitements et des règles métier.
- **BaseService** : classe de base qui partage des traitements communs entre plusieurs services.

---

## Besoin et problème

Le code d'une application peut devenir difficile à maintenir lorsque l'affichage, les règles métier et l'accès aux données sont mélangés.

Le problème concret du projet et la solution proposée restent à préciser. Aucun contexte métier n'a été fourni.

---

## Architecture proposée

Présenter les trois couches et le chemin d'une demande :

1. La présentation reçoit une action.
2. Un Service applique les règles métier.
3. Un DAO lit ou modifie les données.
4. Le résultat revient à la présentation.

Montrer où BaseService peut aider à partager un traitement commun sans mélanger les responsabilités.

---

## Exemples et tests pratiques

Pour chacune des quatre notions, présenter :

- Son rôle dans l'organisation du code.
- Un exemple PHP simple.
- Un test pratique lié au projet technique.
- Le résultat attendu et le résultat observé.

Les exemples et résultats sont à compléter après leur réalisation et vérification.

---

## Résultats et apprentissages

À compléter après les tests :

- Ce qui a fonctionné.
- Ce qui a été appris sur chaque notion.
- Les difficultés rencontrées.
- Les améliorations possibles.
