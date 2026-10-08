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
    color: #acff1d;
    font-size: 54px;
    border-bottom: 6px solid #38bdf8;
    padding-bottom: 14px;
  }
  .lead h1, .lead h2 { color: white; border: 0; }
  .lead h1 { font-size: 76px; padding: 0; }
  h2 { color: #8adeff; font-size: 34px; }
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

---

# Personnaliser le thème

```yaml
---
marp: true
theme: gaia
color: #0f172a
paginate: true
---
```

- Changez le thème pour modifier la palette.
- Ajoutez des styles personnalisés avec `style:`.
- Créez une identité visuelle cohérente.

---

# Ajouter des images et des visuels

```markdown
![bg right:40% contain](./assets/illustration.png)
```

- Utilisez des images de fond pour renforcer un message.
- Réglez la taille avec `width:` ou `height:`.
- Privilégiez des visuels lisibles et cohérents.

---

# Utiliser du HTML et des composants

```html
<div class="note">
  Astuce : vous pouvez inclure du HTML simple.
</div>
```

- Ajoutez des blocs d’attention ou des encadrés.
- Personnalisez le rendu avec du CSS local.
- Restez clair et lisible pour l’audience.

---

# Bonnes pratiques

- Une idée par diapositive.
- Des phrases courtes et des listes claires.
- Des visuels utiles, pas décoratifs.
- Testez toujours la version exportée.

---

<!-- _class: lead -->

# En résumé

Marp permet de créer des présentations propres et rapides à maintenir.

## Markdown + simplicité + export multi-format

- rapide à écrire
- facile à versionner
- prêt pour PDF, PPTX et web
