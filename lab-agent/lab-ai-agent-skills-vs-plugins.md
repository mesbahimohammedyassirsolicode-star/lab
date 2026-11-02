---
marp: true
theme: default
paginate: true
size: 16:9
style: |
  :root {
    --ink: #0F1724;
    --ink-soft: #16202F;
    --ink-line: #2A3547;
    --paper: #FBFBF9;
    --paper-soft: #F1F3F6;
    --paper-line: #D8DEE7;
    --text-dark: #E9EEF6;
    --text-dark-muted: #A7B3C4;
    --text-light: #141A23;
    --text-light-muted: #5A6675;
    --brass: #D2A24C;
    --brass-deep: #8A5A12;
    --code-bg: #0A111C;
  }
  section {
    position: relative;
    font-family: Inter, "Segoe UI", system-ui, sans-serif;
    background: var(--ink);
    color: var(--text-dark);
    padding: 48px 64px 58px;
    font-size: 24px;
    line-height: 1.45;
  }
  section.light {
    background: var(--paper);
    color: var(--text-light);
  }
  section::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 160px;
    height: 4px;
    background: var(--brass);
  }
  section.light::before { background: var(--brass-deep); }
  h1, h2, h3 {
    font-family: Anton, Impact, sans-serif;
    font-weight: 400;
    letter-spacing: 0.01em;
    line-height: 1.08;
    margin: 0;
  }
  h1 { font-size: 2.7em; }
  h2 {
    font-size: 1.45em;
    margin-bottom: 0.6em;
    padding-bottom: 0.26em;
    position: relative;
  }
  h2::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    width: 64px;
    height: 4px;
    border-radius: 99px;
    background: var(--brass);
  }
  section.light h2::after { background: var(--brass-deep); }
  h3 {
    font-family: Inter, "Segoe UI", sans-serif;
    font-size: 0.74em;
    font-weight: 700;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    color: var(--text-dark-muted);
    margin: 0.6em 0 0.28em;
  }
  section.light h3 { color: var(--text-light-muted); }
  p { margin: 0.38em 0; }
  p, li { line-height: 1.42; }
  strong { color: #FFFFFF; font-weight: 700; }
  section.light strong { color: var(--text-light); font-weight: 700; }
  em { font-style: italic; color: inherit; }
  a {
    color: var(--brass);
    text-decoration: none;
    border-bottom: 1px solid rgba(210, 162, 76, 0.5);
  }
  section.light a {
    color: var(--brass-deep);
    border-bottom-color: rgba(138, 90, 18, 0.4);
  }
  ul, ol { margin: 0.35em 0 0.55em; padding-left: 1.2em; }
  li { margin: 0.18em 0; }
  li::marker { color: var(--brass); }
  section.light li::marker { color: var(--brass-deep); }
  code {
    font-family: "JetBrains Mono", "Cascadia Code", Consolas, monospace;
    font-size: 0.84em;
    background: var(--ink-soft);
    color: #DCE5F2;
    border: 1px solid var(--ink-line);
    padding: 0.1em 0.34em;
    border-radius: 5px;
  }
  section.light code {
    background: var(--paper-soft);
    color: #253044;
    border-color: var(--paper-line);
  }
  pre {
    background: var(--code-bg) !important;
    border: 1px solid var(--ink-line);
    border-left: 3px solid var(--brass);
    border-radius: 10px;
    padding: 15px 20px;
    font-size: 0.64em;
    line-height: 1.5;
    box-shadow: none;
    margin: 0.45em 0 0.6em;
  }
  pre code,
  marp-pre code,
  section.light pre code,
  section.light marp-pre code {
    background: transparent;
    border: 0;
    padding: 0;
    color: #DCE5F2;
    font-size: 1em;
  }
  blockquote {
    margin: 0.55em 0 0.35em;
    padding: 12px 18px;
    background: var(--ink-soft);
    border-left: 3px solid var(--brass);
    border-radius: 0 8px 8px 0;
    color: var(--text-dark);
    font-size: 0.88em;
  }
  blockquote p { margin: 0; }
  section.light blockquote {
    background: var(--paper-soft);
    color: var(--text-light);
  }
  section table {
    width: 100%;
    box-sizing: border-box;
    border-collapse: separate;
    border-spacing: 0;
    font-size: 0.72em;
    margin: 0.45em 0 0.55em;
    border: 1px solid #3A4A63;
    border-radius: 8px;
    overflow: hidden;
    background: #101A2C;
    color: #E9EEF6;
  }
  section table thead,
  section table thead tr,
  section table th {
    background: #15243C !important;
    color: #FFFFFF !important;
  }
  section table tbody,
  section table tbody tr,
  section table tbody td {
    color: #E9EEF6 !important;
  }
  section table th {
    box-sizing: border-box;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.07em;
    font-size: 0.92em;
    text-align: left;
    padding: 11px 13px;
    border: 0;
    box-shadow: inset -1px 0 0 #3A4A63, inset 0 -1px 0 #3A4A63;
    vertical-align: top;
  }
  section table th:last-child {
    box-shadow: inset 0 -1px 0 #3A4A63;
  }
  section table td {
    box-sizing: border-box;
    background: #141F33 !important;
    padding: 10px 13px;
    border: 0;
    box-shadow: inset -1px 0 0 #33425A, inset 0 -1px 0 #33425A;
    vertical-align: top;
  }
  section table td:last-child {
    box-shadow: inset 0 -1px 0 #33425A;
  }
  section table tbody tr:nth-child(even) td {
    background: #1A273D !important;
  }
  section table tbody tr:last-child td {
    box-shadow: none;
  }
  section table tbody tr:last-child td:not(:last-child) {
    box-shadow: inset -1px 0 0 #33425A;
  }
  section table td strong,
  section table th strong {
    color: #FFFFFF !important;
    font-weight: 700;
  }
  section table td em,
  section table th em {
    color: #E9EEF6 !important;
    font-style: italic;
  }
  section table td code,
  section table th code {
    background: #223149 !important;
    color: #F2F7FF !important;
    border: 1px solid #41546F !important;
  }
  section.light table {
    border-color: #3A4A63;
    background: #101A2C;
  }
  section.light table th {
    background: #15243C !important;
    color: #FFFFFF !important;
  }
  section.light table td {
    background: #141F33 !important;
    color: #E9EEF6 !important;
  }
  section.light table tbody tr:nth-child(even) td {
    background: #1A273D !important;
  }
  section.dense p { margin: 0.22em 0; }
  section.dense ul { margin: 0.3em 0 0; }
  section.dense li { margin: 0.06em 0; }
  section.dense table { margin: 0.3em 0 0.3em; }
  section::after {
    color: var(--text-dark-muted);
    font-size: 12px;
    letter-spacing: 0.10em;
  }
  section.light::after { color: var(--text-light-muted); }
  section.title {
    display: flex;
    flex-direction: column;
    justify-content: center;
  }
  section.title h1 {
    font-size: 3.0em;
    max-width: 16ch;
    margin: 0 0 0.35em;
  }
  section.title h1::after {
    content: "";
    display: block;
    width: 110px;
    height: 5px;
    margin-top: 0.28em;
    border-radius: 99px;
    background: var(--brass);
  }
  section.title p {
    font-size: 0.78em;
    margin: 0.14em 0;
    color: var(--text-dark-muted);
  }
  section.title p strong { color: var(--text-dark); }
  section.agenda ol {
    list-style: none;
    counter-reset: item;
    padding-left: 0;
    margin: 0.6em 0 0;
  }
  section.agenda li {
    counter-increment: item;
    position: relative;
    padding: 0.55em 1em 0.55em 3.4em;
    margin: 0.38em 0;
    background: var(--paper-soft);
    border: 1px solid var(--paper-line);
    border-radius: 10px;
    font-size: 0.98em;
  }
  section.agenda li::before {
    content: counter(item, decimal-leading-zero);
    position: absolute;
    left: 1.05em;
    top: 50%;
    transform: translateY(-50%);
    font-family: Anton, Impact, sans-serif;
    font-size: 1.05em;
    color: var(--brass-deep);
  }
  section.defs p {
    border-left: 2px solid var(--ink-line);
    padding-left: 0.85em;
    margin: 0.42em 0;
  }
  section.light.defs p { border-left-color: var(--paper-line); }
  section.compact { font-size: 22px; }
  section.compact marp-pre { font-size: 0.60em; }
---

<!-- _class: title -->

# Lab : AI Agent Skills vs. Agent Plugins

**Présenté par :** Mohammed Yassir Mesbahi

**Encadrant :** ES-SARRAJ Fouad

**Date :** 02 Novembre 2026

---

<!-- _class: light agenda -->

## Plan de Présentation

1. Introduction & Stack Technique
2. Définitions
3. Problème
4. Solution

---

## Stack Technique

| Composant | Rôle |
|:---|:---|
| `.agent/` (Antigravity) | Format de configuration d'agent : skills, workflows, rules, templates |
| n8n | Plateforme d'automatisation de workflows |
| Claude Code | Hôte de plugins : charge skills, commandes, hooks et règles |
| Markdown (`SKILL.md`, rules) | Support des instructions, des règles et des templates |
| JSON (`plugin.json`, `hooks.json`) | Métadonnées du plugin et configuration des hooks |
| Git Bash (Windows) | Exécution du hook `cat` sous Windows |
| MCP / API n8n | Connexion directe à une instance n8n |

---

<!-- _class: light defs -->

## Définitions

**Agent IA :** système qui interprète une demande, raisonne et exécute des tâches à l'aide de ses instructions et de ses capacités.

**Skill (compétence) :** paquet réutilisable d'instructions, de règles et de contexte qui guide l'agent dans une tâche. Représenté par un fichier `SKILL.md` et ses ressources.

**Plugin :** paquet installable qui regroupe et distribue des composants (skills, commandes, hooks, règles, métadonnées) pour un hôte donné.

**Rule (règle) :** consigne toujours active ou ciblée par glob, appliquée automatiquement à la session ou à la tâche.

---

<!-- _class: defs -->

## Définitions (suite)

**Hook :** script déclenché par un événement de l'hôte, par exemple `SessionStart`.

**Commande slash :** point d'entrée répétable et nommé, par exemple `/fullstack-agent:processus-developpement`.

**`SKILL.md` :** fichier d'entrée d'un skill : description, conditions de déclenchement et instructions.

**`plugin.json` / `marketplace.json` :** identité du plugin (nom, version, description) et catalogue d'installation.

**MCP :** protocole standard permettant de connecter l'agent à des outils et services externes.

**Workflow :** enchaînement d'étapes formalisé (spécification → build → test → livraison).

---

<!-- _class: light -->

## Problème

**Le problème concret : la confusion entre skill et plugin.**

- Les deux projets utilisent des conventions d'emballage différentes : `.agent/` (Antigravity) d'un côté, plugin Claude Code de l'autre.
- Les concepts se ressemblent, mais les dossiers changent : `workflows/` devient `commands/`.
- Les règles toujours actives n'ont pas de mécanisme de chargement explicite dans `.agent/`.
- On ne sait plus quoi réutiliser tel quel, quoi convertir, ni ce qui doit réellement être installé.
- **Conséquences :** duplication des contenus, packs non installables, documentation incohérente et perte de temps.

> **Lacune clé :** un skill et un plugin ne sont pas des catégories interchangeables. L'un peut être un composant de l'autre.

---

## Solution — Expliquer chaque concept

### Le skill

- Décrit **comment réaliser une tâche**.
- Contenu : instructions, contexte, templates et scripts.
- Se charge par sa description quand la tâche correspond.
- Exemple : `expert-n8n-nodes/SKILL.md`.

### Le plugin

- **Empaquette et distribue** des composants.
- Contenu : skills + commandes + hooks + règles + métadonnées.
- S'installe sur un hôte compatible.
- Exemple : `fullstack-agent/`.

> **Règle de lecture :** un plugin peut contenir des skills ; un skill n'a pas besoin d'être un plugin.

---

<!-- _class: light -->

## Solution — Étape 1 : Quick Start

**A. Plugin Fullstack — installation locale**

```bash
claude --plugin-dir ./fullstack-agent
```

**B. Installation via le marketplace**

```text
/plugin marketplace add ./fullstack-agent
/plugin install fullstack-agent@mym-plugins
```

> **Environnement :** le hook du plugin utilise `cat` ; sous Windows, Claude Code nécessite Git Bash.

---

## Solution — Étape 1 : Quick Start (suite)

**C. Agent n8n — sans installation**

- Copier le dossier `.agent/` à la racine du workspace Antigravity.
- Aucune connexion requise pour produire un `workflow.json` importable.

**Ce que le setup active**

- `skills/` : compétences chargées selon la tâche.
- `workflows/` : enchaînements réutilisables.
- `rules/` : contraintes appliquées à chaque session.
- `templates/` : modèles de workflows réutilisables.

> **Vérification :** le dossier `.agent/` doit contenir `skills/`, `workflows/`, `rules/` et `templates/` avant la première demande.

---

<!-- _class: light -->

## Solution — Étape 2 : Hello World

**Plugin Fullstack — première commande exécutable**

```text
/fullstack-agent:processus-developpement build me a restaurant website with an admin API
```

Résultat attendu : l'agent charge le skill correspondant et démarre le processus de développement (UI + API admin).

**Agent n8n — première génération**

Demande : « Créer un workflow qui reçoit un webhook et renvoie une réponse JSON. »

Résultat attendu : un `workflow.json` valide, directement importable dans n8n.

> **Vérifications :** skill réellement chargé, versions de nœuds exactes, aucun secret dans le JSON.

---

<!-- _class: compact -->

## Solution — Projet A : n8n Agent

**Ce que c'est :** une configuration d'agent au format Antigravity `.agent/`, conçue pour construire des workflows n8n à partir d'une description utilisateur.

```text
n8n-agent/
└── .agent/
    ├── skills/
    ├── workflows/
    ├── rules/
    ├── templates/
    └── examples/
```

**Exemples de skills :**

- `architecte-workflow`
- `expert-n8n-nodes`
- `expert-integrations`
- `testeur-debugger`

Le README décrit un pipeline *spec-first* : comprendre le besoin, définir la spécification, configurer les credentials, construire, tester/déboguer, livrer.

---

<!-- _class: light -->

## Solution — Fonctionnement du n8n Agent

```text
1. Demande utilisateur
2. Analyse du besoin
3. Spécification du workflow
4. Configuration des credentials
5. Génération du workflow JSON
6. Test et débogage
7. Livraison
```

**Principes de conception du projet**

- Valider la spécification avant de générer le JSON.
- Utiliser des types de nœuds, versions et paramètres vérifiés.
- Garder les secrets hors du workflow JSON.
- Prévoir les chemins d'erreur pour la production.
- Respecter un point de contrôle `GO` utilisateur entre les phases.

> **Intégration :** sans MCP ni API, l'agent produit un `workflow.json` importable ; avec MCP/API, il interagit directement avec l'instance n8n.

---

## Solution — Projet B : Fullstack Agent Plugin

**Ce que c'est :** un plugin Claude Code installable, converti depuis un pack `.agent/`.

```text
fullstack-agent/
├── .claude-plugin/
│   ├── plugin.json
│   └── marketplace.json
├── skills/
├── commands/
├── hooks/
│   └── hooks.json
└── rules/
```

Le README décrit un assistant de développement full-stack couvrant notamment l'UI, les API, Laravel, Kotlin, le SEO et les standards frontend/backend.

Il regroupe plusieurs skills, des commandes slash réutilisables, des règles et un hook de démarrage de session.

---

<!-- _class: light compact -->

## Solution — Anatomie du plugin

Le plugin possède des métadonnées explicites d'empaquetage Claude Code.

**`plugin.json`**

```json
{
  "name": "fullstack-agent",
  "version": "1.0.0",
  "description": "Full-stack architect agent..."
}
```

**`hooks/hooks.json`**

```json
{
  "description": "Injects always-on rules at session start",
  "hooks": { "SessionStart": [{ "hooks": [{
    "type": "command",
    "command": "echo '# Fullstack Agent: always-on rules'; cat \"${CLAUDE_PLUGIN_ROOT}\"/rules/*.md"
  }]}]}
}
```

Le hook injecte les règles du plugin au démarrage d'une session Claude Code.

---

<!-- _class: dense -->

## Solution — Migration `.agent/` vers plugin

Le projet Fullstack documente une table de migration depuis le pack `.agent/` :

| Élément `.agent/` d'origine | Implémentation dans le plugin |
|:---|:---|
| `rules` (toujours actives) | `rules/`, injectées par un hook de démarrage de session |
| `rules` (glob) | `skills/standards-*`, chargées par description |
| `skills` | `skills/` |
| `workflows` | `commands/` (commandes slash) |
| `templates` | `skills/<owner>/templates/` |

**Bonnes pratiques observées**

- Garder les connaissances spécifiques à une tâche dans des skills ciblés.
- Utiliser les commandes pour les points d'entrée répétables.
- Utiliser les hooks pour les comportements déclenchés par événement.
- Déclarer l'identité et la version du plugin dans les métadonnées.
- Documenter les dépendances de plateforme et d'environnement.

---

<!-- _class: light -->

## Solution — Skills vs Plugins : comparaison directe

| Dimension | Skill | Plugin |
|:---|:---|:---|
| Rôle principal | Guider la réalisation d'une tâche | Empaqueter et distribuer des composants |
| Contenu typique | Instructions, contexte, ressources | Skills, commandes, hooks, règles, métadonnées |
| Réutilisation | Réutilisable entre les tâches | Installable comme un paquet complet |
| Exemple du lab | `expert-n8n-nodes/SKILL.md` | `fullstack-agent/` |
| Peut contenir des skills ? | C'est un skill en soi | Oui, dans ce projet |

> **À retenir :** un plugin peut contenir des skills. Un skill n'a pas besoin d'être un plugin.

---

## Solution — Comment ils fonctionnent ensemble

```text
Hôte : assistant de code / agent
              |
              v
      Plugin Fullstack
              |
      +-------+--------+
      |       |        |
      v       v        v
    Skills Commandes  Hooks
      |       |        |
      v       v        v
   Guidance Workflow  Comportement
   de tâche entrée    de session
      |
      v
  L'agent exécute la tâche
```

Un skill fournit une guidance spécifique à la tâche. Une commande démarre un workflow répétable. Un hook réagit à un événement de l'hôte. Le plugin empaquette ces éléments pour l'hôte pris en charge.

Un plugin peut aussi connecter des outils externes, mais sa présence ne garantit pas une intégration externe.

---

<!-- _class: light -->

## Solution — Quand utiliser chacun ?

**Créer un skill quand :**

- L'agent a besoin de connaissances métier ou d'instructions répétables.
- Vous voulez standardiser la façon de réaliser une tâche.
- Vous devez fournir des références, templates ou scripts.

**Créer un plugin quand :**

- Vous voulez distribuer un ensemble coordonné de composants d'agent.
- Vous avez besoin d'une installation et de métadonnées reconnues par la plateforme.
- Vous voulez regrouper des skills avec des commandes, des hooks et des règles.

**Les deux :** livrer des skills ciblés à l'intérieur d'une extension installable plus large.

> **Livrables du lab :** ce support, la table de migration `.agent/` → plugin et l'analyse des deux projets sources (n8n Agent et Fullstack Agent Plugin).
