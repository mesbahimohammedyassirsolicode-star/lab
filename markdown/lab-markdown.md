---
marp: true
theme: default
paginate: true
size: 16:9
style: |
  @import url('https://fonts.googleapis.com/css2?family=Anton&family=Inter:wght@400;600;700&display=swap');

  section {
    background: #0d1117;
    color: #e6edf3;
    font-family: 'Inter', system-ui, sans-serif;
    font-size: 24px;
    padding: 50px 70px;
    justify-content: flex-start;
  }

  h1, h2 {
    font-family: 'Anton', Impact, sans-serif;
    letter-spacing: 0.5px;
    margin: 0 0 20px 0;
  }

  h1 { font-size: 74px; color: #58a6ff; line-height: 1.05; }
  h2 { font-size: 48px; color: #58a6ff; border-bottom: 2px solid #30363d; padding-bottom: 10px; }
  h3 { font-size: 26px; color: #79c0ff; margin: 15px 0 8px 0; }

  section.light {
    background: #f6f8fa;
    color: #1f2328;
  }

  section.light h1,
  section.light h2 {
    color: #0969da;
    border-bottom: 2px solid #d0d7de;
  }

  section.light h3 {
    color: #0550ae;
  }

  section.light p,
  section.light li {
    color: #1f2328;
  }

  section.title {
    background: radial-gradient(circle at 85% 15%, #1f6feb 0%, #0d1117 65%);
    display: flex;
    flex-direction: column;
    justify-content: center;
  }

  section.title h1 {
    font-size: 86px;
    color: #ffffff;
    line-height: 1;
    margin-bottom: 20px;
  }

  .by {
    font-size: 22px;
    color: #8b949e;
    margin-top: 25px;
  }

  .by strong {
    font-family: 'Anton', Impact, sans-serif;
    color: #58a6ff;
    font-size: 32px;
    display: block;
    letter-spacing: 1px;
  }

  ul, ol {
    line-height: 1.5;
    margin-bottom: 16px;
  }

  li {
    margin-bottom: 8px;
  }

  code {
    background: rgba(110, 118, 129, 0.2);
    color: #f0f6fc;
    padding: 3px 8px;
    border-radius: 6px;
    font-size: 20px;
    font-family: 'Consolas', 'Courier New', monospace;
  }

  section.light code {
    background: rgba(175, 184, 193, 0.25);
    color: #0969da;
  }

  pre {
    background: #161b22;
    border: 1px solid #30363d;
    border-radius: 8px;
    padding: 14px 18px;
    font-size: 18px;
    line-height: 1.35;
    margin: 10px 0;
  }

  section.light pre {
    background: #ffffff;
    border: 1px solid #d0d7de;
  }

  table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
    font-size: 19px;
  }

  th {
    background: #161b22;
    color: #58a6ff;
    padding: 8px 12px;
    border: 1px solid #30363d;
    text-align: left;
  }

  td {
    padding: 8px 12px;
    border: 1px solid #30363d;
  }

  section.light th {
    background: #eaeef2;
    color: #0969da;
    border: 1px solid #d0d7de;
  }

  section.light td {
    border: 1px solid #d0d7de;
  }

  blockquote {
    border-left: 4px solid #58a6ff;
    padding-left: 16px;
    color: #8b949e;
    font-style: italic;
    margin: 12px 0;
  }
---

<!-- _class: title -->

# Markdown Syntax<br>& Document Structure

<div class="by">
  <strong>Mohammed Yassir Mesbahi</strong>
</div>

---

<!-- _class: light -->

## Lab Plan

1. Introduction au Markdown & objectifs
2. Problèmes rencontrés (Problems Encountered)
3. Solutions appliquées (Solutions Implemented)
4. Exemples : Titres, paragraphes et styles
5. Exemples : Listes et liens hypertextes
6. Exemples : Images et tableaux
7. Exemples : Blocs de code & coloration syntaxique

---

## Introduction

### Objectif & Portée du Lab

- **Objectif** : Découvrir la syntaxe Markdown pour rédiger, formater et structurer des documents techniques clairs.
- **Compétences développées** :
  - Structurer un document avec des niveaux de titres (`#` à `######`)
  - Organiser le texte en paragraphes, emphase (**gras**, *italique*) et citations
  - Créer des listes à puces, listes numérotées et listes de tâches
  - Intégrer des hyperliens et des images
  - Mettre en page des données sous forme de tableaux
  - Insérer du code en ligne et des blocs de code multi-langages
- **Livrable** : Présentation et exemples pratiques versionnés dans le dépôt GitHub.

---

## Problems Encountered

### Obstacles rencontrés lors de la mise en forme

- **Fusion involontaire de lignes** : Le retour à la ligne simple est ignoré en Markdown sans double espace final ou saut de paragraphe.
- **Rupture de structure des tableaux** : Manque d'alignement ou omission de la ligne séparatrice de tirets (`| --- |`), rendant le tableau brut et illisible.
- **Coloration syntaxique absente** : Blocs de code sans indication explicite du langage (`html`, `javascript`, `php`).
- **Affichage des images et chemins relatifs** : Liens brisés lors de fautes de frappe ou d'adresses d'images non accessibles.

---

<!-- _class: light -->

## Solutions Implemented

### 01 — Gestion des retours à la ligne
Insérer une ligne vide pour séparer les paragraphes, ou terminer une ligne avec deux espaces pour forcer un saut de ligne `<br>`.

### 02 — Structuration rigoureuse des tableaux
Définir l'en-tête, la ligne de séparation (`| :--- | :---: | ---: |`) pour contrôler précisément l'alignement à gauche, au centre ou à droite.

### 03 — Typage des blocs de code
Ouvrir les blocs avec trois backticks suivis du nom du langage (ex: ```` ```javascript ````) pour bénéficier de la coloration syntaxique.

### 04 — Sécurisation des liens et images
Vérifier l'accessibilité des chemins et toujours fournir un texte alternatif descriptif (`![alt](url)`).

---

## Exemples Pratiques : Titres & Formatage

### Hiérarchie et emphase de texte

```markdown
# Titre Principal (H1)
## Sous-titre (H2)
### Section détaillée (H3)

Texte normal avec du **texte en gras** et du *texte en italique*.
Possibilité d'ajouter du ~~texte barré~~ ou du ***texte gras et italique***.

> Une citation en retrait pour faire ressortir une note importante.
```

- Les titres permettent d'organiser la lecture et de générer des sommaires.
- Les citations (`>`) mettent en évidence les remarques clés.

---

<!-- _class: light -->

## Exemples Pratiques : Listes & Liens

### Listes ordonnées, non ordonnées et liens hypertextes

```markdown
### Mes Compétences (Liste non ordonnée) :
- Frontend : HTML5, CSS3, JavaScript
- Backend : PHP, Laravel
- Outils : Git, GitHub, VS Code

### Étapes du Lab (Liste ordonnée) :
1. Découvrir la syntaxe Markdown
2. Réaliser des exemples pratiques
3. Déposer le livrable sur GitHub

Lien vers mon profil : [Profil GitHub](https://github.com/mohammedyassirmesbahi/)
```

---

## Exemples Pratiques : Images & Tableaux

### Intégration de visuels et de tables de données

```markdown
![Logo Markdown](https://upload.wikimedia.org/wikipedia/commons/4/48/Markdown-mark.svg)
```

| Élément | Syntaxe | Rendu attendu |
| :--- | :---: | ---: |
| Titre H1 | `# Titre` | Grand titre principal |
| Gras | `**mot**` | **mot** en gras |
| Italique | `*mot*` | *mot* incliné |
| Code en ligne | `` `git status` `` | Style bloc machine |
| Lien | `[texte](url)` | Lien cliquable |

---

<!-- _class: light -->

## Exemples Pratiques : Blocs de Code

### Coloration syntaxique multi-langages

```javascript
// Exemple JavaScript
function saluer(apprenant) {
  console.log(`Bienvenue au lab Markdown, ${apprenant} !`);
}
saluer("Mohammed Yassir Mesbahi");
```

```php
<?php
// Exemple PHP
$technologies = ['HTML', 'CSS', 'JavaScript', 'PHP', 'Markdown'];
foreach ($technologies as $tech) {
    echo "Technologie maîtrisée : {$tech}\n";
}
?>
```
