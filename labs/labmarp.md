---
marp: true
theme: default
paginate: true
size: 16:9
title: Créer une présentation avec Marp
style: |
  section {
    background: #f8fafc;
    color: #172554;
    font-family: "Aptos", "Segoe UI", sans-serif;
    padding: 68px 86px;
  }
  section.lead {
    background: linear-gradient(135deg, #0f172a 0%, #1d4ed8 58%, #38bdf8 100%);
    color: white;
    text-align: left;
  }
  h1 {
    color: #0f3b8f;
    font-size: 54px;
    border-bottom: 6px solid #38bdf8;
    padding-bottom: 14px;
  }
  .lead h1, .lead h2 { color: white; border: 0; }
  .lead h1 { font-size: 76px; padding: 0; }
  h2 { color: #1d4ed8; font-size: 34px; }
  ul { font-size: 24px; line-height: 1.45; }
  li::marker { color: #0284c7; }
  code { color: #0f3b8f; }
  pre { border: 1px solid #bfdbfe; border-radius: 14px; }
  footer { color: #64748b; }
---

<!-- _class: lead -->

# Créer une présentation avec Marp

## Des diapositives écrites en Markdown

---

# Marp en quelques mots

- Marp transforme un fichier Markdown en présentation.
- Chaque séparateur `---` crée une nouvelle diapositive.
- Le fichier reste simple à modifier, versionner et partager.

---

# Installation

Installez la ligne de commande Marp avec npm :

```bash
npm install --global @marp-team/marp-cli
```

Vérifiez ensuite l’installation :

```bash
marp --version
```

---

# Structure d’un fichier Marp

```markdown
---
marp: true
theme: default
paginate: true
---

# Titre de la première diapositive

---

# Titre de la deuxième diapositive
```

Le bloc en haut du fichier configure la présentation.

---

# Mise en forme du contenu

```markdown
# Titre de diapositive

- Premier point
- Deuxième point

![width:420px](image.png)
```

- Utilisez les titres, listes, images et blocs de code Markdown.
- Gardez une idée principale par diapositive.

---

# Générer la présentation

Prévisualisez le fichier dans le navigateur :

```bash
marp --server labmarp.md
```

Exportez la présentation :

```bash
marp labmarp.md --pdf
marp labmarp.md --pptx
```

---

<!-- _class: lead -->

# À vous de jouer

1. Créez un fichier `.md`.
2. Ajoutez l’en-tête Marp.
3. Séparez vos diapositives avec `---`.
4. Lancez `marp --server votre-fichier.md`.
