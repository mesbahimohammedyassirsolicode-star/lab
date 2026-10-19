
---
marp: true
theme: default
paginate: true
---

# LAB — Debug PHP API

## Error: Invalid JSON Response

```text
Uncaught (in promise) SyntaxError:
Unexpected token '<', "<br /><b>"...
is not valid JSON
```

---

# 01 — Lire l'erreur

```text
Unexpected token '<'
```

**Question :** Pourquoi JavaScript reçoit-il `<` ?

- A. Le JSON est vide
- B. PHP retourne du HTML
- C. `fetch()` est désactivé

---

# 02 — Inspecter la réponse

```js
fetch(apiUrl)
  .then(response => response.text())
  .then(data => console.log(data));
```

**Mission :** ouvrir la Console et lire la réponse PHP.

---

# 03 — Identifier la cause

```html
<br />
<b>Warning</b>: Undefined array key ...
```

**À vérifier :**
- Le message d'erreur PHP
- Les clés JSON envoyées
- Le code PHP de la requête POST

---

# 04 — Corriger la lecture JSON

```php
$data = json_decode(
    file_get_contents('php://input'),
    true
);

$names = $data['names'] ?? '';
$categories = $data['categories'] ?? '';
```

**Attention :** vérifier que les noms correspondent
aux clés envoyées par JavaScript.

---

# 05 — Retester

```js
fetch(apiUrl)
  .then(response => response.json())
  .then(data => console.log(data))
  .catch(error => console.error(error));
```

**Résultat attendu :** un tableau JSON valide.

---

# Challenge

Corriger l'API pour qu'elle retourne
du JSON valide, même en cas d'erreur.

```php
header('Content-Type: application/json; charset=utf-8');

echo json_encode([
    'error' => 'Message explicite'
]);
```

**Test final :** ajouter une catégorie
et vérifier la réponse dans Network → Response.
