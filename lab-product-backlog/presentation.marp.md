---
marp: true
theme: default
size: 16:9
paginate: true
style: |
  @import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Space+Grotesk:wght@500;600;700&display=swap');
  :root { --ink: #10243e; --blue: #0866c6; --aqua: #00a9b7; --lime: #c8e93a; --paper: #f6f9fc; --muted: #64748b; }
  section { font-family: 'DM Sans', Arial, sans-serif; color: var(--ink); background: var(--paper); padding: 54px 70px 50px; font-size: 24px; line-height: 1.35; }
  h1, h2, h3 { font-family: 'Space Grotesk', Arial, sans-serif; color: var(--ink); }
  h1 { font-size: 54px; letter-spacing: -1.8px; margin: 0 0 12px; }
  h2 { font-size: 36px; letter-spacing: -1px; margin: 0 0 25px; }
  h3 { font-size: 23px; margin: 0 0 9px; color: var(--blue); }
  h2::after { content: ''; display: block; width: 56px; height: 5px; margin-top: 11px; background: var(--lime); border-radius: 4px; }
  p, li { font-size: 23px; }
  ul { padding-left: 1.15em; }
  li { margin: 9px 0; }
  strong { color: var(--blue); }
  table { width: 100%; border-collapse: separate; border-spacing: 0; overflow: hidden; border-radius: 12px; font-size: 20px; }
  th { background: var(--blue); color: white; padding: 12px 16px; text-align: left; }
  td { padding: 13px 16px; background: white; border-bottom: 2px solid var(--paper); }
  tr:last-child td { border-bottom: 0; }
  code { font-size: 17px; }
  a { color: var(--blue); }
  section::after { color: var(--blue); font-weight: 700; }
  section.title { color: white; background: linear-gradient(125deg, #06264a 0%, #0866c6 62%, #00a9b7 100%); }
  section.title h1, section.title h2, section.title strong { color: white; }
  section.title h2::after { background: var(--lime); }
  section.title::before { content: ''; position: absolute; width: 520px; height: 520px; border: 70px solid rgba(200,233,58,.22); border-radius: 50%; right: -210px; top: -260px; }
  section.dark { color: #eef7ff; background: #10243e; }
  section.dark h1, section.dark h2, section.dark h3, section.dark strong { color: white; }
  section.dark h2::after { background: var(--lime); }
  section.dark td { color: var(--ink); }
  section.split { display: grid; grid-template-columns: 1fr 1fr; column-gap: 55px; align-content: center; }
  section.split h2 { grid-column: 1 / -1; }
  section.empathy li { font-size: 18px; margin: 4px 0; }
  .logos { position: absolute; top: 44px; right: 65px; display: flex; gap: 18px; align-items: center; }
  .logos img { height: 46px; max-width: 130px; object-fit: contain; }
---

<!-- _class: title -->

<div class="logos"><img src="images/ofppt-logo.png"><img src="images/solicode-logo.png"></div>

# Product Backlog

## Préparer le blog des lauréats

**Présenté par** · Mohammed Yassir Mesbahi<br>
**Encadré par** · ES-SARRAJ Fouad

---

## Plan de la présentation

1. Introduction et contexte
2. Problématique
3. Solution proposée
4. Acteurs et diagramme de contexte
5. Backlog initial
6. Empathy Map

---

<!-- _class: split -->

## Introduction

### Pourquoi préparer le projet ?

Avant le développement du blog, il faut comprendre ses utilisateurs et organiser leurs besoins.

### Objectif du lab

Le lab Product Backlog permet de préparer le projet avant le développement.

---

<!-- _class: dark -->

## Problématique

La méthodologie Scrum nécessite l'existence d'un Product Backlog avant le démarrage du premier Sprint. Cependant, au début du projet, nous ne disposons pas encore d'une vision suffisamment claire des besoins réels des utilisateurs, de leurs problèmes et des fonctionnalités nécessaires.


---

## Définition

Le Product Backlog est une liste ordonnée des besoins et fonctionnalités à réaliser pour un produit.

Il est construit à partir des besoins validés des utilisateurs et priorisé avant le Sprint Planning.

---

<!-- _class: split -->

## Solution proposée

### Comprendre

- Identifier les acteurs et leurs interactions
- Comprendre les besoins, attentes et difficultés
- Utiliser le Design Thinking

### Organiser

- Transformer les besoins validés en User Stories
- Prioriser les éléments du backlog

**Méthode choisie :** Design Thinking avant le premier Sprint Scrum.

---

## Acteurs du blog

| Acteur | Rôle |
|:---|:---|
| Administrateur | Gère le contenu et les utilisateurs |
| Lauréat | Rédige et gère ses articles |
| Visiteur | Consulte les articles publiés |

---

<!-- _class: dark -->

## Diagramme de contexte

```mermaid
flowchart LR
    Admin["Administrateur"]
    Auteur["Lauréat"]
    Visiteur["Visiteur"]
    Blog["Système de gestion<br/>de blog"]
    Admin ---|"Gère le contenu"| Blog
    Auteur ---|"Rédige ses articles"| Blog
    Visiteur ---|"Consulte les articles"| Blog
```

---

## Livrable — Backlog initial

| Priorité | Besoin utilisateur |
|---|---|
| P1 | En tant que visiteur, consulter les articles publiés |
| P2 | En tant que lauréat, rédiger, modifier et publier des articles |
| P3 | En tant qu’administrateur, gérer les utilisateurs et modérer les articles |
| P4 | En tant que visiteur, rechercher des articles publiés |

**Note :** ces priorités sont à confirmer avec les utilisateurs pendant la phase d’empathie.

---




<!-- _class: empathy -->

## Empathy Map – Blog des Lauréats

Cette Empathy Map est réalisée à partir de la synthèse des interviews effectuées auprès des utilisateurs potentiels le 13/11/2026.

### 1. Que pense-t-il et ressent-il ?

- Il souhaite une interface simple et minimaliste.
- Il recherche une expérience de navigation agréable.
- Il veut accéder facilement aux informations.
- Il apprécie les articles courts, clairs et bien présentés.
- Il souhaite découvrir des contenus intéressants.

---

<!-- _class: empathy split -->

## Empathy Map – Voit, dit et fait

### 2. Que voit-il ?

- Des articles accompagnés d'images.
- Des descriptions courtes.
- Des catégories et différents niveaux.
- Des profils personnels et des profils de lauréats.
- Une barre de navigation organisée.
- Des options de filtrage et de recommandation.

### 3. Que dit-il et fait-il ?

- Il demande une interface minimaliste.
- Il propose d'organiser les articles par catégories et niveaux.
- Il souhaite filtrer les articles selon les vues et l'âge.
- Il demande des recommandations d'articles.
- Il souhaite consulter l'historique.
- Il propose d'ajouter une section de commentaires.
- Il souhaite un mode sombre.

---

<!-- _class: empathy split -->

## Empathy Map – Problèmes et besoins

### 4. Quels sont ses problèmes ? (Pains)

- Difficulté à trouver rapidement les articles.
- Manque d'organisation du contenu.
- Présentation des articles peu claire.
- Descriptions trop longues.
- Difficulté à retrouver les anciennes publications.
- Navigation qui peut être compliquée.

### 5. Quels sont ses besoins et bénéfices attendus ? (Gains)

- Une interface simple et moderne.
- Une navigation facile et bien organisée.
- Des articles illustrés avec des descriptions courtes.
- Des filtres pour faciliter la recherche.
- Des recommandations pertinentes.
- Un historique des articles.
- Un espace de commentaires.
- Un mode sombre.
- Une langue simple et accessible aux débutants.

---

<!-- _class: dark -->

## Synthèse de l'Empathy Map

L'utilisateur recherche une plateforme de blog simple, moderne et intuitive, qui facilite la consultation, la recherche et l'organisation des articles. Il souhaite également profiter d'une expérience personnalisée grâce aux recommandations, aux filtres et aux fonctionnalités d'interaction.

**Source :** Synthèse des interviews réalisées le 13/11/2026.
