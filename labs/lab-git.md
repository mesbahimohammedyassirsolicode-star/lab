---
marp: true
theme: default
paginate: true
size: 16:9
---

# Lab-Git

## Utiliser Git dès le début du projet

![width:300px](assets/git-logo.png)

---

# Objectif

![width:700px](assets/git-objectif.png)

---

# 1. Initialiser un dépôt Git

```bash
git init
```

---

# 2. Vérifier l'état du dépôt

```bash
git status
```

---

# 3. Créer la structure du projet

```bash
mkdir src
touch src/index.html
touch README.md
```

---

# 4. Ajouter les fichiers à l'index

```bash
git add .
```

---

# 5. Créer un premier commit

```bash
git commit -m "Initial commit"
```

---

# 6. Vérifier l'historique

```bash
git log --oneline
```

---

