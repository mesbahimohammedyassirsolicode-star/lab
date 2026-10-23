---
marp: true
theme: default
paginate: true
size: 16:9
style: |
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap');

  :root {
    --primary: #4F46E5;
    --primary-light: #818CF8;
    --accent: #EC4899;
    --dark-bg: #0F172A;
    --dark-surface: #1E293B;
    --light-bg: #F8FAFC;
    --light-surface: #FFFFFF;
    --text-light: #F1F5F9;
    --text-dark: #1E293B;
    --muted: #94A3B8;
  }

  section {
    background: radial-gradient(circle at top right, #1e1b4b, var(--dark-bg));
    color: var(--text-light);
    font-family: 'Inter', system-ui, -apple-system, sans-serif;
    padding: 45px 65px;
    font-size: 20px;
  }

  section.light {
    background: linear-gradient(135deg, #F8FAFC, #EEF2F6);
    color: var(--text-dark);
  }

  h1 {
    font-size: 2.6em;
    font-weight: 800;
    letter-spacing: -0.02em;
    background: linear-gradient(120deg, #818CF8, #F472B6);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    margin-bottom: 0.2em;
  }

  h2 {
    font-size: 1.85em;
    font-weight: 700;
    color: var(--primary-light);
    border-bottom: 3px solid var(--primary);
    padding-bottom: 8px;
    margin-bottom: 0.5em;
  }

  section.light h2 {
    color: var(--primary);
    border-bottom-color: var(--primary);
  }

  p, li {
    line-height: 1.6;
    font-size: 1.05em;
  }

  li::marker {
    color: var(--primary-light);
  }

  strong {
    color: #F472B6;
    font-weight: 600;
  }

  section.light strong {
    color: #BE185D;
  }

  .meta-box {
    margin-top: 35px;
    padding: 16px 24px;
    background: rgba(30, 41, 59, 0.7);
    border: 1px solid rgba(129, 140, 248, 0.3);
    border-radius: 12px;
    display: inline-flex;
    gap: 40px;
  }

  .meta-item {
    display: flex;
    flex-direction: column;
  }

  .meta-label {
    font-size: 0.8em;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    color: var(--muted);
  }

  .meta-value {
    font-size: 1.15em;
    font-weight: 600;
    color: #FFFFFF;
  }

  code {
    background: rgba(99, 102, 241, 0.18);
    color: #E0E7FF;
    padding: 2px 7px;
    border-radius: 5px;
    font-size: 0.9em;
  }

  section.light code {
    background: rgba(99, 102, 241, 0.12);
    color: #3730A3;
  }

  pre code {
    background: transparent;
    padding: 0;
  }

  table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 15px;
    font-size: 0.9em;
  }

  th {
    background: var(--primary);
    color: white;
    padding: 10px 14px;
    text-align: left;
  }

  td {
    padding: 8px 14px;
    border-bottom: 1px solid rgba(148, 163, 184, 0.2);
  }

  section.light td {
    border-bottom: 1px solid rgba(148, 163, 184, 0.3);
  }
---

# 🚀 [Nom du Lab Technique]

> [Sous-titre ou brève description de l'objectif du lab]

<div class="meta-box">
  <div class="meta-item">
    <span class="meta-label">👨‍💻 Réalisé par</span>
    <span class="meta-value">Mohammed Yassir Mesbahi</span>
  </div>
  <div class="meta-item">
    <span class="meta-label">👨‍🏫 Encadré par</span>
    <span class="meta-value">Fouad Essarraj</span>
  </div>
</div>

---

<!-- _class: light -->

## Plan de Présentation

1. **Introduction & Stack Technique**
   - Objectifs du lab et technologies mises en œuvre
2. **Définitions Clés**
   - Notions techniques indispensables à la compréhension
3. **Problème**
   - Problématique concrète justifiant ce lab
4. **Solution**
   - Mise en œuvre technique (Quick Start & Hello World si lab technique) ou démarche

---

## 🛠️ Stack Technique

Description des technologies utilisées dans ce lab :

- **[Technologie Principale]** (ex: *Laravel 11, Kotlin, PHP Native*) : Rôle dans le projet
- **[Langage / Runtime]** (ex: *PHP 8.2, Kotlin / Java SDK*) : Version et dépendances
- **[Mobile / UI / Frontend]** (ex: *PHP Native, Kotlin Android, Alpine.js, Tailwind CSS & Preline UI*) : Intégration
- **[Outils / Base de données]** (ex: *MySQL, JSON, Composer, Gradle*) : Configuration nécessaire

---

<!-- _class: light -->

## 📖 Définitions Clés

Explication des termes techniques essentiels pour les développeurs :

- **[Terme 1]** : Définition claire et accessible avec exemple contextuel.
- **[Terme 2]** : Pourquoi ce concept est important et comment il fonctionne.
- **[Terme 3]** : Différence par rapport à une alternative classique.

---

## ⚠️ Problème

### Quelle difficulté rencontrons-nous sans ce lab ?

- **Le blocage initial** : [Expliquer la difficulté rencontrée dans le développement]
- **Les limitations** : [Pourquoi les approches naïves échouent ou posent problème]
- **L'impact** : [Perte de temps, bugs, manque de performance ou de sécurité]

> *« [Citation ou résumé percutant du problème] »*

---

<!-- _class: light -->

## 💡 Solution

### Comment ce lab répond au problème :

- **Approche retenue** : [Présentation de la solution technique ou méthodologique]
- **Avantages clés** :
  - Clarté et standardisation
  - Reproductibilité et efficacité
  - Conformité aux exigences pédagogiques

---

## 💡 Solution (Suite : Labs Techniques)

### 1. Quick Start
```bash
# Commandes d'installation et initialisation minimale
composer create-project laravel/laravel demo-app
cd demo-app
php artisan serve
```

### 2. Le « Hello World »
```php
// Exemple minimal fonctionnel prouvant que le setup fonctionne
Route::get('/', function () {
    return response()->json(['message' => 'Hello World — Lab Validé !']);
});
```
