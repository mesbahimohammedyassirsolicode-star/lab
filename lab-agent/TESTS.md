# Protocole de Test et Validation des Skills

Ce document décrit comment tester, exécuter et vérifier le bon fonctionnement et l'utilité des Skills développés avec **Antigravity** et **GitHub Copilot** dans **VS Code**.

---

## 1. Vue d'Ensemble des Skills Déployés

| Skill | Emplacement Antigravity | Emplacement Copilot (VS Code) | Objectif |
|:---|:---|:---|:---|
| **`task-structuring`** | `.agents/skills/task-structuring/SKILL.md` | `.github/prompts/task-structuring.prompt.md` | Structurer, découper et borner n'importe quelle tâche de développement ou lab. |
| **`marp-lab-presentation`** | `.agents/skills/marp-lab-presentation/SKILL.md` | `.github/prompts/marp-lab-presentation.prompt.md` | Adapter et générer un livrable Marp standardisé (`lab-<topic>.md`) selon l'architecture stricte. |

Les règles communes sont également injectées via `.github/copilot-instructions.md`.

---

## 2. Procédure de Test dans Antigravity

Antigravity charge automatiquement les Skills situés dans `.agents/skills/` via le mécanisme de *progressive disclosure*.

### Test A : Vérification du Skill `task-structuring`
1. **Invite à soumettre dans le chat Antigravity :**
   > *"Je dois concevoir un module de gestion des utilisateurs en Node.js avec validation des entrées et hachage de mot de passe. Utilise le skill task-structuring pour me structurer cette tâche."*
2. **Critères de validation du résultat :**
   - [x] L'agent présente un objectif clair et délimite le périmètre (**In-Scope** vs **Out-of-Scope**).
   - [x] Un tableau récapitulatif liste les sous-tâches (T1, T2, etc.) avec type, dépendances et complexité.
   - [x] Chaque sous-tâche dispose de critères d'acceptation au format `Given - When - Then`.
   - [x] Une checklist **Definition of Done (DoD)** est fournie sans placeholder.

### Test B : Vérification du Skill `marp-lab-presentation`
1. **Invite à soumettre dans le chat Antigravity :**
   > *"Génère la présentation Marp complète pour notre lab sur le débogage d'erreurs JavaScript avec le skill marp-lab-presentation."*
2. **Critères de validation du résultat :**
   - [x] Le livrable est un fichier unique `lab-<topic>.md`.
   - [x] **Slide 1 :** Titre du lab **uniquement** (aucun nom d'auteur, date ou ID étudiant).
   - [x] **Slide 2 :** Plan strict avec `<!-- _class: light -->` (1. Introduction, 2. Problems Encountered, 3. Solutions Implemented).
   - [x] **Slides 3, 4, 5 :** Introduction, problèmes concrets rencontrés, solutions appliquées.
   - [x] **Slides suivantes :** Blocs de code avec coloration syntaxique (`javascript`, etc.) et tableaux Markdown alignés.
   - [x] Alternance visuelle de fond sombre / fond clair (`<!-- _class: light -->`).

---

## 3. Procédure de Test dans GitHub Copilot (VS Code)

GitHub Copilot dans VS Code lit automatiquement `.github/copilot-instructions.md` et les fichiers `.github/prompts/`.

### Méthode 1 : Via Copilot Chat avec référence directe
1. Ouvrez **Copilot Chat** dans VS Code (`Ctrl + Alt + I` ou panneau latéral).
2. Entrez la commande suivante :
   > *"@workspace Peux-tu structurer la tâche suivante selon nos instructions : Développement d'un système de panier d'achat avec stockage local ?"*
3. **Résultat attendu :** Copilot applique la structure en 5 étapes définie dans `copilot-instructions.md` (Périmètre, Découpage INVEST, Critères Given-When-Then, DoD).

### Méthode 2 : Via les Prompts prédéfinis
1. Dans VS Code Copilot Chat, faites référence au prompt :
   > *"Applique le prompt #file:task-structuring.prompt.md pour le sujet : Création d'un CRUD en PHP/PDO."*
   ou pour la présentation :
   > *"Applique le prompt #file:marp-lab-presentation.prompt.md pour générer la présentation du lab CRUD PHP."*
2. **Résultat attendu :** Copilot applique strictement la séquence des 5 slides et les règles Marp sans aucun nom sur la première slide.

---

## 4. Exemple Concret Validé : Démonstration du Skill `marp-lab-presentation`

Voici un extrait type validant le respect scrupuleux des règles :

```markdown
---
marp: true
theme: default
paginate: true
size: 16:9
style: |
  section {
    background-color: #0f172a;
    color: #f8fafc;
    font-family: 'Inter', system-ui, sans-serif;
    padding: 40px 60px;
  }
  h1, h2, h3 {
    font-family: 'Anton', 'Impact', sans-serif;
    color: #38bdf8;
  }
  section.light {
    background-color: #f8fafc;
    color: #0f172a;
  }
  section.light h1, section.light h2, section.light h3 {
    color: #0284c7;
  }
  pre, code {
    background-color: #1e293b;
    color: #e2e8f0;
    border-radius: 6px;
  }
  section.light pre, section.light code {
    background-color: #e2e8f0;
    color: #0f172a;
  }
---

# JavaScript Error Debugging Lab

---
<!-- _class: light -->

## Lab Plan

1. Introduction
2. Problems Encountered
3. Solutions Implemented

---

## 1. Introduction

- **Purpose & Scope:** Détection, analyse et correction des exceptions synchrones et asynchrones en JavaScript moderne.
- **Concepts & Outils :**
  - Gestion des blocs `try...catch...finally`
  - Gestion des rejets de Promesses non interceptés (`unhandledrejection`)
  - Types d'erreurs standards : `TypeError`, `ReferenceError`, `SyntaxError`

---
<!-- _class: light -->

## 2. Problems Encountered

- **Incident 1 : TypeError sur propriété indéfinie**
  - Tentative de lecture de `response.data.user.id` alors que `data` était `null`.
- **Incident 2 : Promesse asynchrone non capturée**
  - Absence de bloc `.catch()` ou `try/catch` autour de `fetchUserData()`, causant un crash silencieux.

---

## 3. Solutions Implemented

- **Solution 1 : Optional Chaining (`?.`) & Nullish Coalescing (`??`)**
  - Sécurisation des accès aux propriétés imbriquées avec valeurs de repli par défaut.
- **Solution 2 : Middleware Global de Gestion d'Erreurs**
  - Mise en place d'un wrapper asynchrone standardisé capturant systématiquement les exceptions.

---
<!-- _class: light -->

## Practical Implementation: Safe Asynchronous Fetch

```javascript
async function fetchUserProfile(userId) {
  try {
    const response = await fetch(`/api/users/${userId}`);
    if (!response.ok) {
      throw new Error(`HTTP error! status: ${response.status}`);
    }
    const data = await response.json();
    return data?.profile ?? { name: "Anonyme", role: "Guest" };
  } catch (error) {
    console.error("Failed to fetch user profile:", error.message);
    return null;
  }
}
```

---

## Verification & Compliance Matrix

| Critère de Contrôle | Exigence | Résultat du Test |
|:---|:---|:---:|
| Slide 1 Title Only | Aucun nom d'auteur ni identifiant | ✅ Conforme |
| Lab Plan | 1. Intro, 2. Problèmes, 3. Solutions | ✅ Conforme |
| Rythme visuel | Alternance sombre / light | ✅ Conforme |
| Bloc de code | Syntaxe déclarée et lisible | ✅ Conforme |
| Fichier unique | Fichier lab-<topic>.md autonome | ✅ Conforme |
```
