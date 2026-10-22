---
marp: true
theme: default
paginate: true
---

# LAB — Debug JavaScript

## Read → Find → Fix → Test

---

# Challenge 01

```text
main.js:25

Uncaught TypeError:
form.addEventListener is not a function
```

**Mission :** Trouver la cause et corriger le code.

---

# Inspecter le code

```js
const form =
  document.getElementsByClassName("form");

form.addEventListener("submit", (e) => {
  e.preventDefault();
  console.log("Submitted");
});
```

**Question :** Quel est le problème ?

---

# Lire l'erreur

```text
main.js:25
```

→ Fichier : `main.js`

→ Ligne : `25`

```text
addEventListener is not a function
```

→ `form` n'est pas un élément DOM unique.

---

# Fix

```js
const form =
  document.querySelector(".form");

form.addEventListener("submit", (e) => {
  e.preventDefault();
  console.log("Submitted");
});
```

---

# Test

```js
console.log(form);
console.log(form instanceof HTMLFormElement);
```

**Résultat attendu :**

```text
<form class="form">...</form>
true
```

---

# Challenge 02

```js
const button = document.getElementById("save");

button.addEventListener("click", () => {
  console.log("Saved");
});
```

**HTML :**

```html
<button id="submit">Save</button>
```

**Mission :** Corriger le bug sans modifier le JavaScript.