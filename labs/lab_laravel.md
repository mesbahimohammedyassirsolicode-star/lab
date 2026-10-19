---
marp: true
theme: default
paginate: true
size: 16:9
title: Laravel - Le framework PHP pour le web
style: |
  section {
    background: #f8fafc;
    color: #172554;
    font-family: "Aptos", "Segoe UI", sans-serif;
    padding: 68px 86px;
  }
  section.lead {
    background: linear-gradient(135deg, #0f172a 0%, #1d4ed8 58%, #ff2d20 100%);
    color: white;
    text-align: left;
  }
  h1 {
    color: #ff2d20;
    font-size: 54px;
    border-bottom: 6px solid #ff2d20;
    padding-bottom: 14px;
  }
  .lead h1, .lead h2 { color: white; border: 0; }
  .lead h1 { font-size: 76px; padding: 0; }
  h2 { color: #1d4ed8; font-size: 34px; }
  h3 { color: #0f3b8f; font-size: 26px; margin-bottom: 10px; }
  ul { font-size: 24px; line-height: 1.45; }
  li::marker { color: #ff2d20; }
  strong { color: #1d4ed8; }
  code { color: #0f3b8f; }
  pre { border: 1px solid #bfdbfe; border-radius: 14px; }
  footer { color: #64748b; }
---

<!-- _class: lead -->

# Laravel

## Le framework PHP pour les artisans du web

Présenté par : mohammed yassir mesbahi
SOLICODE

---

# Plan de la présentation

1. **Qu'est-ce que Laravel ?**
2. **Son rôle dans un projet web**
3. **L'architecture MVC**
4. **Installation et prise en main**
5. **Les composants essentiels** (routing, Eloquent, Blade, Artisan)
6. **L'écosystème Laravel**
7. **Avantages et limites**
8. **Conclusion et ressources**

---

# 1. Qu'est-ce que Laravel ?

- Framework web **open source** écrit en **PHP** (licence MIT).
- Créé en **juin 2011** par **Taylor Otwell**.
- Syntaxe expressive, élégante et orientée développeur.
- Le framework PHP le plus utilisé : **64 % des développeurs PHP** (JetBrains 2025).
- En 2026 : **Laravel 12/13**, PHP ≥ 8.3 requis pour la dernière version.

---

# 2. Son rôle dans un projet web

Laravel prend en charge les tâches courantes à votre place :

- **Routage** et gestion des requêtes HTTP
- **Base de données** : requêtes, migrations, seeds
- **Authentification** et autorisation
- **Sessions**, caches, files d'attente, e-mails
- **Tests** et outils de débogage

> « Batteries-included » : tout ce qu'il faut pour aller du concept à la production.

---

# 3. L'architecture MVC

Le pattern **Model - View - Controller** sépare les responsabilités :

| Rôle | Analogie restaurant | En Laravel |
|---|---|---|
| **Controller** | Le serveur qui prend la commande | `app/Http/Controllers` |
| **Model** | La cuisine qui prépare les données | `app/Models` (Eloquent) |
| **View** | L'assiette servie au client | `resources/views` (Blade) |

---

# 4. Installation et prise en main

Créer un nouveau projet :

```bash
composer create-project laravel/laravel mon-app
cd mon-app
```

Lancer le serveur de développement :

```bash
php artisan serve
# Application accessible sur http://127.0.0.1:8000
```

Prérequis : **PHP ≥ 8.2**, Composer, et un serveur MySQL/PostgreSQL/SQLite.

---

# 5. Le routage

Les routes sont définies dans `routes/web.php` :

```php
Route::get('/', [ HomeController::class, 'index' ]);
Route::get('/produits', fn () => Produit::all());
Route::post('/commandes', [ CommandeController::class, 'store' ]);
```

- **GET, POST, PUT, DELETE** pour les verbes HTTP.
- Les routes se regroupent avec `Route::prefix()` et `Route::middleware()`.
- Le middleware gère l'authentification et la sécurité (CSRF, etc.).

---

# 6. Eloquent : l'ORM de Laravel

Chaque table a son **Model** (pattern ActiveRecord) :

```php
class Produit extends Model
{
    protected $fillable = ['nom', 'prix'];
}

// Requêtes sans SQL brut
$produits = Produit::where('prix', '<', 50)->get();
$produit = Produit::find(1);
```

- Relations : `hasMany`, `belongsTo`, `belongsToMany`.
- **Migrations** pour versionner le schéma de la base.
- Factories et seeders pour les données de test.

---

# 7. Blade : le moteur de templates

```blade
<h1>{{ $produit->nom }}</h1>

@foreach ($produits as $p)
  <li>{{ $p->nom }} — {{ $p->prix }} DH</li>
@endforeach

@extends('layouts.app')
@section('content') ... @endsection
```

- Syntaxe courte : `{{ }}` (échappée) et `{!! !!}` (HTML brut).
- Composants et sections réutilisables.
- Se compile en **PHP pur** : performant en production.

---

# 8. Artisan : la ligne de commande

| Commande | Rôle |
|---|---|
| `php artisan serve` | Lancer le serveur local |
| `php artisan make:model Produit -m` | Créer un modèle + migration |
| `php artisan make:controller` | Créer un contrôleur |
| `php artisan migrate` | Exécuter les migrations |
| `php artisan make:auth` | Générer l'authentification |
| `php artisan tinker` | REPL pour tester le code |

Vous pouvez aussi créer vos **propres commandes** Artisan.

---

# 9. L'écosystème Laravel

- **Frontend** : Blade + Livewire, ou React/Vue/Svelte via **Inertia.js**
- **Sécurité** : Sanctum (API), Socialite (OAuth), hachage bcrypt
- **Qualité** : Pest/PHPUnit, Dusk (tests navigateur), Pint (style)
- **Performance** : Octane, Horizon (queues), Scout (recherche)
- **Déploiement** : Sail (Docker), Forge, Vapor (serverless), Cloud
- **Monitoring** : Telescope, Pulse, Nightwatch
- **Nouveauté 2026** : AI SDK, Boost et MCP pour l'IA

---

# 10. Avantages et limites

| ✅ Avantages | ❌ Limites |
|---|---|
| Syntaxe claire et agréable | Plus lourd qu'un micro-framework |
| Documentation officielle exhaustive | Courbe d'apprentissage sur les conventions |
| Écosystème et communauté très actifs | Surdimensionné pour de petits projets |
| Sécurité intégrée (CSRF, XSS, SQLi) | Peut demander des optimisations (cache, Octane) |
| Tests, CLI et outils intégrés | |

---

# 11. Cas d'usage

- Applications **full-stack** : Laravel + Livewire
- Frontend **SPA** : React / Vue / Svelte avec Inertia
- **API REST/JSON** pour applications mobiles ou Next.js
- Sites **e-commerce**, SaaS, CRM, portails, blogs

Utilisé par : **OpenAI, Apple, Nike, NASA, Pfizer, Dropbox, Harvard, The New York Times**...

---

# Travaux pratiques

1. Installer PHP, Composer et créer un projet :
   `composer create-project laravel/laravel tp-laravel`
2. Créer un modèle `Tache` avec migration et seeder.
3. Afficher la liste des tâches avec une route et une vue Blade.
4. Ajouter un formulaire de création (POST + validation).
5. Protéger l'espace avec l'authentification de Laravel.

---

<!-- _class: lead -->

# En résumé

Laravel structure, sécurifie et accélère le développement web en PHP.

## MVC + Eloquent + Blade + Artisan

- rapide à prendre en main
- documenté et maintenu
- prêt pour la production
