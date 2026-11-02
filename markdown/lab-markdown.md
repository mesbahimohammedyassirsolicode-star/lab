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

  ul, ol {
    line-height: 1.6;
    margin-bottom: 16px;
  }

  li {
    margin-bottom: 10px;
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

# Lab Markdown

**Étudiant :** Mohammed Yassir Mesbahi  
**Encadrant :** Fouad Es-sarraj

---

<!-- _class: light -->

## Plan de Présentation

1. Introduction & Stack Technique
2. Définitions
3. Problème
4. Solution

---

## Stack Technique

**Stack de Développement Web Full-Stack**

- **Laravel** : Framework PHP backend pour API REST et logique métier
- **Alpine.js** : Framework JavaScript léger pour l'interactivité frontend
- **Tailwind CSS & Preline UI** : Framework CSS utilitaire et bibliothèque de composants
- **MySQL** : Base de données relationnelle pour stocker les catégories
- **Composer** : Gestionnaire de dépendances PHP

---

<!-- _class: light -->

## Définitions

### Markdown
Langage de balisage léger créé en 2004, utilisant une syntaxe simple (`#`, `**`, `-`) pour formater du texte. Converti en HTML, il est utilisé pour README, documentation technique et blogs.

### Balisage (Markup)
Système de notation qui structure le contenu avec des symboles spéciaux. Contrairement au HTML (`<h1>Titre</h1>`), Markdown simplifie avec `# Titre`.

---

## Définitions (suite)

### Syntaxe
Ensemble de règles qui définissent comment écrire correctement dans un langage. En Markdown : `**gras**` pour **gras**, `*italique*` pour *italique*.

### Rendu (Rendering)
Processus de transformation du code source (Markdown) en format visuel final (HTML/PDF). Le rendu interprète `# Titre` et l'affiche comme un grand titre.

---

<!-- _class: light -->

## Problème

**Nous voulons créer de la documentation en Markdown mais nous ne savons pas comment faire.**

### Conséquences sans maîtrise du Markdown :

- **Documentation inexistante ou mal structurée** : Difficulté à expliquer les fonctionnalités aux autres développeurs
- **Perte de temps** : Utilisation d'outils lourds (Word, Google Docs) inadaptés au code
- **Manque de professionnalisme** : Projets GitHub sans README clair
- **Collaboration difficile** : Impossibilité de versionner efficacement la documentation

---

## Solution

**Pratiquer la création de documentation Markdown à travers un cas pratique concret**

### Cas pratique : Documenter la fonctionnalité "Ajout de Catégorie"

Nous allons créer une documentation complète et professionnelle pour une fonctionnalité réelle d'une application Laravel + Alpine.js.

**Livrable :** Fichier `docs/feature-add-category.md`

---

<!-- _class: light -->

## Solution — Structure de la Documentation

```markdown
# Fonctionnalité : Ajout de Catégorie

## Description
Permet aux administrateurs d'ajouter une nouvelle catégorie 
de produits dans le système via un formulaire interactif.

## Prérequis
- Laravel 10+ installé
- MySQL configuré
- Alpine.js chargé via CDN
- Droits d'administration

## Stack Utilisée
- **Backend** : Laravel (API REST)
- **Frontend** : Alpine.js + Tailwind CSS
- **Base de données** : MySQL
```

---

## Solution — Architecture des Composants

```markdown
## Architecture

| Composant | Fichier | Responsabilité |
|:----------|:--------|:---------------|
| Route | `routes/web.php` | Définit `/categories/create` |
| Contrôleur | `CategoryController.php` | Logique métier & validation |
| Modèle | `Category.php` | Représente la table `categories` |
| Vue | `categories/create.blade.php` | Formulaire Alpine.js |
| Migration | `xxxx_create_categories_table.php` | Schéma BDD |

## Schéma de Base de Données

```sql
CREATE TABLE categories (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    slug VARCHAR(255) UNIQUE NOT NULL,
    description TEXT,
    created_at TIMESTAMP,
    updated_at TIMESTAMP
);
```
```

---

<!-- _class: light -->

## Solution — Endpoints API

```markdown
## Endpoints API

### GET /api/categories
Récupère la liste des catégories.

**Réponse (200 OK) :**
```json
[
  {
    "id": 1,
    "name": "Électronique",
    "slug": "electronique",
    "description": "Appareils électroniques"
  }
]
```

### POST /api/categories
Crée une nouvelle catégorie.

**Requête :**
```json
{
  "name": "Électronique",
  "description": "Appareils électroniques",
  "slug": "electronique"
}
```

**Réponse (201 Created) :**
```json
{
  "id": 5,
  "name": "Électronique",
  "slug": "electronique",
  "created_at": "2026-11-02T10:30:00Z"
}
```
```

---

## Solution — Code Backend (Laravel)

```markdown
## Implémentation Backend

### Contrôleur : `app/Http/Controllers/CategoryController.php`

```php
<?php
namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'slug' => 'required|string|unique:categories'
        ]);

        $category = Category::create($validated);

        return response()->json($category, 201);
    }
}
```

### Modèle : `app/Models/Category.php`

```php
<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'slug', 'description'];
}
```
```

---

<!-- _class: light -->

## Solution — Code Frontend (Alpine.js)

```markdown
### Vue : `resources/views/categories/create.blade.php`

```html
<div x-data="categoryForm()">
    <form @submit.prevent="submitCategory">
        <!-- Nom de la catégorie -->
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium">
                Nom de la catégorie
            </label>
            <input 
                type="text" 
                id="name" 
                x-model="form.name"
                @input="generateSlug"
                class="mt-1 block w-full rounded-md border-gray-300"
                required
            >
        </div>

        <!-- Slug (auto-généré) -->
        <div class="mb-4">
            <label for="slug" class="block text-sm font-medium">
                Slug (URL)
            </label>
            <input 
                type="text" 
                id="slug" 
                x-model="form.slug"
                class="mt-1 block w-full rounded-md border-gray-300"
                required
            >
        </div>

        <!-- Description -->
        <div class="mb-4">
            <label for="description" class="block text-sm font-medium">
                Description
            </label>
            <textarea 
                id="description" 
                x-model="form.description"
                rows="3"
                class="mt-1 block w-full rounded-md border-gray-300"
            ></textarea>
        </div>

        <!-- Bouton de soumission -->
        <button 
            type="submit"
            :disabled="loading"
            class="bg-blue-600 text-white px-4 py-2 rounded-md"
            x-text="loading ? 'Création...' : 'Créer la catégorie'"
        ></button>

        <!-- Message de succès -->
        <div x-show="success" class="mt-4 p-3 bg-green-100 text-green-800 rounded">
            Catégorie créée avec succès !
        </div>

        <!-- Message d'erreur -->
        <div x-show="error" class="mt-4 p-3 bg-red-100 text-red-800 rounded">
            Erreur : <span x-text="errorMessage"></span>
        </div>
    </form>
</div>

<script>
function categoryForm() {
    return {
        form: {
            name: '',
            slug: '',
            description: ''
        },
        loading: false,
        success: false,
        error: false,
        errorMessage: '',

        generateSlug() {
            this.form.slug = this.form.name
                .toLowerCase()
                .replace(/[^a-z0-9]+/g, '-')
                .replace(/(^-|-$)/g, '');
        },

        async submitCategory() {
            this.loading = true;
            this.success = false;
            this.error = false;

            try {
                const response = await fetch('/api/categories', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: JSON.stringify(this.form)
                });

                if (response.ok) {
                    this.success = true;
                    this.form = { name: '', slug: '', description: '' };
                } else {
                    const data = await response.json();
                    this.error = true;
                    this.errorMessage = data.message || 'Erreur inconnue';
                }
            } catch (err) {
                this.error = true;
                this.errorMessage = 'Erreur de connexion';
            } finally {
                this.loading = false;
            }
        }
    }
}
</script>
```
```

---

## Solution — Tests

```markdown
## Tests

### Test Unitaire : `tests/Feature/CategoryTest.php`

```php
<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CategoryTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_create_category()
    {
        $response = $this->postJson('/api/categories', [
            'name' => 'Électronique',
            'description' => 'Appareils électroniques',
            'slug' => 'electronique'
        ]);

        $response->assertStatus(201)
                 ->assertJson([
                     'name' => 'Électronique',
                     'slug' => 'electronique'
                 ]);

        $this->assertDatabaseHas('categories', [
            'slug' => 'electronique'
        ]);
    }

    public function test_slug_must_be_unique()
    {
        // Créer une première catégorie
        $this->postJson('/api/categories', [
            'name' => 'Test',
            'slug' => 'test'
        ]);

        // Tenter de créer une deuxième avec le même slug
        $response = $this->postJson('/api/categories', [
            'name' => 'Test 2',
            'slug' => 'test'
        ]);

        $response->assertStatus(422);
    }
}
```

### Commande de test
```bash
php artisan test --filter=CategoryTest
```

### Résultat attendu
```
PASS  Tests\Feature\CategoryTest
✓ can create category
✓ slug must be unique

Tests:  2 passed
Time:   0.15s
```
```

---

<!-- _class: light -->

## Solution — Captures d'écran

```markdown
## Captures d'écran

### Formulaire vide
![Formulaire de création vide](./screenshots/category-form-empty.png)

*Le slug se génère automatiquement lors de la saisie du nom.*

### Validation en temps réel
![Validation Alpine.js](./screenshots/category-validation.png)

*Alpine.js valide les champs côté client avant soumission.*

### Message de succès
![Catégorie créée avec succès](./screenshots/category-success.png)

*Confirmation visuelle après création réussie.*

### Liste mise à jour
![Liste des catégories](./screenshots/categories-list.png)

*La nouvelle catégorie apparaît immédiatement dans la liste.*
```

**Note :** Créer un dossier `docs/screenshots/` pour organiser les images.

---

## Solution — Installation et Déploiement

```markdown
## Installation

### 1. Cloner le projet
```bash
git clone https://github.com/votre-repo/projet.git
cd projet
```

### 2. Installer les dépendances
```bash
composer install
npm install
```

### 3. Configurer la base de données
```bash
cp .env.example .env
php artisan key:generate
# Configurer DB_DATABASE, DB_USERNAME, DB_PASSWORD dans .env
php artisan migrate
```

### 4. Lancer le serveur
```bash
php artisan serve
npm run dev
```

### 5. Accéder à l'application
Ouvrir http://localhost:8000/categories/create

## Déploiement

### Étapes de mise en production

```bash
# 1. Migration de base de données
php artisan migrate --force

# 2. Optimiser l'application
php artisan config:cache
php artisan route:cache
php artisan view:cache

# 3. Build des assets frontend
npm run build

# 4. Vérifier les permissions
chmod -R 755 storage bootstrap/cache
```

### Rollback en cas d'erreur
```bash
php artisan migrate:rollback --step=1
php artisan cache:clear
```
```

---

<!-- _class: light -->

## Récapitulatif : Syntaxe Markdown Utilisée

| Élément | Syntaxe | Usage dans le Lab |
|:--------|:-------:|:------------------|
| Titres | `# ## ###` | Structurer les sections |
| Gras | `**texte**` | Mettre en avant les termes clés |
| Italique | `*texte*` | Notes et précisions |
| Code inline | `` `code` `` | Noms de fichiers et commandes courtes |
| Bloc de code | ` ```php ` | Code source complet avec coloration |
| Tableaux | `\| --- \|` | Architecture, endpoints, syntaxe |
| Listes | `- Item` | Énumérer les étapes et prérequis |
| Images | `![alt](url)` | Captures d'écran |
| Liens | `[nom](url)` | Références externes |

---

## Template Réutilisable

**Fichier :** `docs/TEMPLATE-FEATURE.md`

```markdown
# Fonctionnalité : [NOM]

## Description
[Décrire brièvement la fonctionnalité]

## Prérequis
- [Outil 1]
- [Outil 2]

## Stack Utilisée
- **Backend** : [Framework]
- **Frontend** : [Framework]
- **Base de données** : [BDD]

## Architecture

| Composant | Fichier | Responsabilité |
|:----------|:--------|:---------------|
| Route | `routes/xxx.php` | [Rôle] |
| Contrôleur | `XxxController.php` | [Rôle] |

## Endpoints API

### GET /api/xxx
[Description]

**Réponse (200 OK) :**
```json
{
  "data": []
}
```

## Implémentation Backend

### Contrôleur
```php
// Code ici
```

## Implémentation Frontend

### Vue
```html
<!-- Code ici -->
```

## Tests

### Test Unitaire
```php
// Test ici
```

## Captures d'écran

![Description](./screenshots/xxx.png)

## Installation

```bash
# Commandes
```

## Déploiement

```bash
# Étapes
```
```

---

<!-- _class: light -->

## Bonnes Pratiques de Documentation

### Structure professionnelle

1. **Toujours commencer par un titre H1** : `# Nom de la fonctionnalité`
2. **Suivre une structure logique** : Description → Architecture → Code → Tests → Déploiement
3. **Utiliser des tableaux** pour les données structurées (composants, endpoints)
4. **Spécifier le langage** dans les blocs de code : ` ```php `, ` ```bash `, ` ```json `
5. **Inclure des exemples concrets** : Requêtes/réponses complètes
6. **Ajouter des captures d'écran** pour les interfaces utilisateur
7. **Documenter les tests** : Montrer comment vérifier que ça fonctionne
8. **Fournir les commandes d'installation** : Permettre à un développeur de reproduire

---

## Ressources Complémentaires

### Documentation officielle
- **Markdown** : [markdownguide.org](https://www.markdownguide.org)
- **GitHub Flavored Markdown** : [github.com/gfm](https://github.github.com/gfm/)
- **Laravel Docs** : [laravel.com/docs](https://laravel.com/docs)
- **Alpine.js** : [alpinejs.dev](https://alpinejs.dev)

### Outils recommandés
- **VS Code** : Extensions "Markdown All in One" et "markdownlint"
- **Typora** : Éditeur WYSIWYG pour Markdown
- **Dillinger** : Éditeur en ligne [dillinger.io](https://dillinger.io/)

### Exemples de documentation professionnelle
- **Laravel** : [github.com/laravel/laravel](https://github.com/laravel/laravel)
- **Tailwind CSS** : [github.com/tailwindlabs/tailwindcss](https://github.com/tailwindlabs/tailwindcss)
