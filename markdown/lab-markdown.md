

<!-- _class: title -->

# Lab Markdown

**Étudiant :** Mohammed Yassir Mesbahi  
**Encadrant :** Fouad Essarraj

---

<!-- _class: light -->

## Plan de Présentation

1. Introduction & Stack Technique
2. Définitions
3. Problème
4. Solution

---

## Stack Technique

**Stack de Développement Web Full-Stack**

- **Laravel** : Framework PHP backend pour API REST et logique métier
- **Alpine.js** : Framework JavaScript léger pour l'interactivité frontend
- **Tailwind CSS & Preline UI** : Framework CSS utilitaire et bibliothèque de composants
- **MySQL** : Base de données relationnelle pour gérer les données
- **Composer** : Gestionnaire de dépendances PHP

---

<!-- _class: light -->

## Définitions

### Markdown
Langage de balisage léger créé en 2004, utilisant une syntaxe simple (`#`, `**`, `-`) pour formater du texte. Converti en HTML, il est utilisé pour README, documentation technique et blogs.

### Balisage (Markup)
Système de notation qui structure le contenu avec des symboles spéciaux. Contrairement au HTML (`<h1>Titre</h1>`), Markdown simplifie avec `# Titre`.

---

## Définitions (suite)

### Syntaxe
Ensemble de règles qui définissent comment écrire correctement dans un langage. En Markdown : `**gras**` pour **gras**, `*italique*` pour *italique*.

### Rendu (Rendering)
Processus de transformation du code source (Markdown) en format visuel final (HTML/PDF). Le rendu interprète `# Titre` et l'affiche comme un grand titre.

---

<!-- _class: light -->

## Problème

**Nous devons créer un document Markdown pour présenter notre projet technique, mais nous ne savons pas utiliser tous les éléments Markdown.**

### Conséquences sans maîtrise du Markdown :

- **Présentation de projet incomplète** : Impossibilité de structurer correctement le sujet et les objectifs
- **Documentation non professionnelle** : Manque de mise en forme (gras, italique, tableaux)
- **Difficulté à intégrer du code** : Pas de coloration syntaxique dans les blocs de code
- **Collaboration difficile** : Impossibilité de versionner efficacement la documentation avec Git

---

## Solution

**Apprendre à utiliser tous les éléments Markdown en créant une présentation du projet "Gestion des Restaurants"**

### Travail à réaliser :

Créer un document Markdown (`presentation-gestion-restaurants.md`) contenant **2 slides** :

1. **Slide 1 : Sujet du Projet** — Présenter le sujet avec tous les éléments Markdown
2. **Slide 2 : Objectif du Projet** — Expliquer les objectifs avec tous les éléments Markdown

**Livrable :** Un document simple prêt à être versionné et partagé.

---

<!-- _class: light -->

## Solution — Document à Créer

### Fichier : `presentation-gestion-restaurants.md`

Ce document contiendra 2 slides simples utilisant **tous les éléments Markdown** requis :

✅ Titres et paragraphes  
✅ Texte en gras, italique et barré  
✅ Listes à puces et numérotées  
✅ Listes de tâches  
✅ Liens et images  
✅ Tableaux  
✅ Code et blocs de code  
✅ Citations  
✅ Lignes horizontales

---

## Slide 1 — Sujet du Projet

```markdown
# Slide 1 — Sujet du Projet

Mon projet est une **plateforme de gestion des restaurants** où les gérants 
peuvent gérer les menus, les réservations et les commandes. C'est *personnel* 
— pas ~~juste une copie~~ des solutions existantes.

### Fonctionnalités principales :
- Gestion des menus et plats
- Système de réservations en ligne
- Prise de commande digitale

![Interface de gestion](./screenshots/dashboard.png)

> "La gestion de restaurant devrait être simple et digitale."

---
```

---

<!-- _class: light -->

## Slide 2 — Objectif du Projet

```markdown
# Slide 2 — Objectif du Projet

L'objectif est de simplifier la gestion quotidienne des restaurants, tout 
en apprenant Markdown avec cette présentation. 
Voir le [Guide Markdown](https://www.markdownguide.org/).

### Étapes du projet :
1. Développer le module de gestion des menus
2. Créer le système de réservations
3. Implémenter la prise de commande

### Progression actuelle :
- [x] Module de gestion des catégories
- [x] API REST des plats
- [ ] Interface de réservation
- [ ] Écran cuisine

| Fonctionnalité | Technologies |
|:---------------|:-------------|
| Backend | Laravel + MySQL |
| Frontend | Alpine.js + Tailwind |

### Stack technique :
Configuration Laravel : `composer.json`

```json
{
  "require": {
    "laravel/framework": "^10.0",
    "laravel/sanctum": "^3.0"
  }
}
```
```

---

## Explication des Éléments Utilisés

### Slide 1 — Sujet du Projet
- **Titre H1** : `# Slide 1 — Sujet du Projet`
- **Gras** : `**plateforme de gestion des restaurants**`
- **Italique** : `*personnel*`
- **Barré** : `~~juste une copie~~`
- **Titre H3** : `### Fonctionnalités principales :`
- **Liste à puces** : `- Gestion des menus...`
- **Image** : `![Interface de gestion](./screenshots/dashboard.png)`
- **Citation** : `> "La gestion de restaurant..."`
- **Ligne horizontale** : `---`

---

<!-- _class: light -->

## Explication des Éléments Utilisés (suite)

### Slide 2 — Objectif du Projet
- **Titre H1** : `# Slide 2 — Objectif du Projet`
- **Lien** : `[Guide Markdown](https://www.markdownguide.org/)`
- **Titre H3** : `### Étapes du projet :`
- **Liste numérotée** : `1. Développer le module...`
- **Liste de tâches** : `- [x] Module de gestion...`
- **Tableau** : Structure avec `|` et alignement `:---`
- **Code inline** : `` `composer.json` ``
- **Bloc de code** : ` ```json ` avec coloration syntaxique

---

## Template Réutilisable

```markdown
# Slide 1 — Sujet du Projet

Mon projet est une **[description du projet]** où [public cible] 
peuvent [action principale]. C'est *personnel* — pas ~~juste une copie~~ 
des solutions existantes.

### Fonctionnalités principales :
- [Fonctionnalité 1]
- [Fonctionnalité 2]
- [Fonctionnalité 3]

![Description image](./chemin/vers/image.png)

> "[Citation pertinente sur le projet]"

---

# Slide 2 — Objectif du Projet

L'objectif est de [objectif principal], tout en apprenant Markdown 
avec cette présentation. Voir le [Guide Markdown](https://www.markdownguide.org/).

### Étapes du projet :
1. [Étape 1]
2. [Étape 2]
3. [Étape 3]

### Progression actuelle :
- [x] [Tâche terminée]
- [ ] [Tâche en cours]

| Fonctionnalité | Technologies |
|:---------------|:-------------|
| [Composant 1] | [Tech 1] |
| [Composant 2] | [Tech 2] |

### Stack technique :
Configuration : `fichier.json`

```json
{
  "config": "valeur"
}
```
```

---

<!-- _class: light -->

## Récapitulatif : Tous les Éléments Markdown

| Élément | Syntaxe | Présent dans |
|:--------|:--------|:-------------|
| Titre H1 | `# Titre` | Slide 1 & 2 |
| Titre H3 | `### Titre` | Slide 1 & 2 |
| Gras | `**texte**` | Slide 1 |
| Italique | `*texte*` | Slide 1 |
| Barré | `~~texte~~` | Slide 1 |
| Liste à puces | `- Item` | Slide 1 |
| Liste numérotée | `1. Item` | Slide 2 |
| Liste de tâches | `- [x] Item` | Slide 2 |
| Lien | `[texte](url)` | Slide 2 |
| Image | `![alt](url)` | Slide 1 |
| Tableau | `\| --- \|` | Slide 2 |
| Code inline | `` `code` `` | Slide 2 |
| Bloc de code | ` ```json ` | Slide 2 |
| Citation | `> texte` | Slide 1 |
| Ligne horizontale | `---` | Entre slides |

---

## Conseils de Rédaction

### Structure claire
1. **Slide 1 (Sujet)** : Présenter le contexte et les fonctionnalités principales
2. **Slide 2 (Objectif)** : Détailler les objectifs et la progression

### Répartition des éléments
- **Slide 1** : Éléments visuels (image, citation, listes à puces)
- **Slide 2** : Éléments techniques (tableaux, code, listes de tâches)

### Cohérence
- Utiliser un **style personnel** : "Mon projet est..."
- Rester **concis** : 2-3 paragraphes par slide maximum
- Alterner les éléments pour **maintenir l'intérêt visuel**

---

<!-- _class: light -->

## Prévisualisation et Validation

### Prévisualiser dans VS Code
1. Ouvrir le fichier `.md`
2. Appuyer sur `Ctrl+Shift+V` (Windows/Linux) ou `Cmd+Shift+V` (macOS)
3. Vérifier le rendu de chaque élément

### Points de contrôle
✅ Les titres sont bien hiérarchisés (H1 → H3)  
✅ Le texte en gras/italique/barré s'affiche correctement  
✅ Les listes sont bien formatées  
✅ Les liens sont cliquables  
✅ L'image s'affiche (ou le chemin est correct)  
✅ Le tableau est aligné  
✅ Le code JSON a la coloration syntaxique  
✅ La citation est visuellement distincte  
✅ La ligne horizontale sépare bien les slides

---

## Ressources Complémentaires

### Documentation Markdown
- **Guide officiel** : [markdownguide.org](https://www.markdownguide.org/)
- **GitHub Flavored Markdown** : [github.com/gfm](https://github.github.com/gfm/)
- **Tutoriel interactif** : [markdowntutorial.com](https://www.markdowntutorial.com/)

### Éditeurs Recommandés
- **VS Code** : Avec extension "Markdown All in One"
- **Typora** : Éditeur WYSIWYG
- **Dillinger** : Éditeur en ligne [dillinger.io](https://dillinger.io/)

### Exemples Réels
- [Laravel README](https://github.com/laravel/laravel/blob/master/README.md)
- [Alpine.js Docs](https://github.com/alpinejs/alpine)
