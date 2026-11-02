---
marp: true
theme: default
paginate: true
---

# Lab : Gestion des Restaurants avec Laravel

**Présenté par :** Mohammed Yassir MESBAHI  
**Encadrant :** ES-SSARAJ FOUAD  
**Date :** 02 Novembre 2026

---

## Plan

1. **Stack technique**
2. **Définitions et concepts clés**
3. **Problème et besoin**
4. **Solution et mise en pratique**
5. **Résultats et démonstration**
6. **Conclusion et apprentissages**

---

## Stack technique

### Backend
- **PHP 8.2** : Langage de programmation côté serveur
- **Laravel 11** : Framework MVC pour structurer l'application
- **Composer** : Gestionnaire de dépendances PHP

### Frontend
- **Blade** : Moteur de templates pour les vues
- **Tailwind CSS** : Framework CSS pour le design responsive

### Base de données
- **MySQL 8.0** : Système de gestion de base de données relationnelle
- **Eloquent ORM** : Mapping objet-relationnel intégré à Laravel

### Outils
- **Git** : Contrôle de version
- **VS Code** : Environnement de développement

---

## Définitions

**MVC (Model-View-Controller)**
- Pattern architectural séparant les préoccupations :
  - **Model** : Gestion des données et logique métier
  - **View** : Interface utilisateur
  - **Controller** : Logique de contrôle et orchestration

**ORM (Object-Relational Mapping)**
- Technique permettant de manipuler des bases de données comme des objets PHP

**Migration**
- Système de versionnement pour la structure de base de données
- Permet de créer et modifier les tables de manière programmatique

**CRUD**
- **C**reate, **R**ead, **U**pdate, **D**elete
- Opérations de base sur les données

---

## Problème et besoin

### Problème identifié
- Gestion manuelle des restaurants (papier, Excel)
- Difficultés de suivi des informations (nom, adresse, téléphone)
- Risques d'erreurs et de perte de données
- Absence de centralisation
- Difficultés de recherche et de mise à jour

### Besoins identifiés
✓ Centraliser les informations des restaurants  
✓ Faciliter l'ajout, la modification et la suppression  
✓ Offrir une interface intuitive et responsive  
✓ Sécuriser et valider les données  
✓ Permettre une gestion efficace

### Utilité du Lab
- Apprendre à créer une application CRUD complète
- Comprendre l'architecture MVC en pratique
- Maîtriser Laravel et ses fonctionnalités essentielles

---

## Solution et pratique

### Architecture de l'application

```
app/
├── Models/
│   └── Restaurant.php          # Modèle Eloquent
├── Http/
│   └── Controllers/
│       └── RestaurantController.php  # Contrôleur CRUD
└── database/
    └── migrations/
        └── create_restaurants_table.php  # Structure BDD

resources/
└── views/
    └── restaurants/
        ├── index.blade.php     # Liste
        ├── create.blade.php    # Formulaire création
        ├── edit.blade.php      # Formulaire édition
        └── show.blade.php      # Détails

routes/
└── web.php                     # Définition des routes
```

---

## Solution et pratique (suite)

### Étapes de réalisation

1. **Configuration de l'environnement**
   - Installation de Laravel via Composer
   - Configuration de la base de données (.env)

2. **Création de la structure**
   ```bash
   php artisan make:model Restaurant -mcr
   ```
   - Model, Migration, Controller, Resource routes

3. **Migration de la base de données**
   ```php
   Schema::create('restaurants', function (Blueprint $table) {
       $table->id();
       $table->string('nom');
       $table->string('adresse');
       $table->string('telephone');
       $table->timestamps();
   });
   ```

---

## Solution et pratique (suite)

### Exemple : Contrôleur

```php
class RestaurantController extends Controller
{
    public function index()
    {
        $restaurants = Restaurant::all();
        return view('restaurants.index', compact('restaurants'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'adresse' => 'required|string',
            'telephone' => 'required|string|max:20',
        ]);

        Restaurant::create($request->all());
        return redirect()->route('restaurants.index')
            ->with('success', 'Restaurant créé avec succès');
    }
}
```

---

## Solution et pratique (suite)

### Fonctionnalités implémentées

✓ **Liste des restaurants** (index)
  - Affichage de tous les restaurants dans un tableau
  - Boutons d'action (voir, modifier, supprimer)

✓ **Ajout d'un nouveau restaurant** (create/store)
  - Formulaire de saisie
  - Validation des données
  - Messages de confirmation

✓ **Modification des informations** (edit/update)
  - Pré-remplissage du formulaire
  - Mise à jour en base de données

✓ **Suppression d'un restaurant** (destroy)
  - Confirmation de suppression
  - Suppression sécurisée

---

## Résultats et démonstration

### Captures d'écran

**Page d'accueil - Liste des restaurants**
- Tableau avec colonnes : Nom, Adresse, Téléphone, Actions
- Bouton "Ajouter un restaurant"
- Design responsive avec Tailwind CSS

**Formulaire d'ajout**
- Champs : Nom, Adresse, Téléphone
- Validation côté client et serveur
- Messages d'erreur clairs

**Page de détails**
- Affichage complet des informations
- Options de modification et suppression

---

## Résultats et démonstration (suite)

### Tests effectués

| Test | Résultat |
|------|----------|
| Ajout d'un restaurant valide | ✓ Succès |
| Validation des champs vides | ✓ Erreurs affichées |
| Modification des données | ✓ Mise à jour réussie |
| Suppression | ✓ Suppression confirmée |
| Responsive design | ✓ Compatible mobile/tablette |
| Routes RESTful | ✓ Toutes fonctionnelles |

---

## Conclusion et apprentissages

### Objectifs atteints
✓ Application CRUD complète et fonctionnelle  
✓ Interface utilisateur intuitive  
✓ Code structuré selon les bonnes pratiques Laravel  
✓ Validation des données implémentée  
✓ Design responsive

### Compétences acquises
- **Architecture MVC** : Compréhension et mise en pratique
- **Laravel** : Routing, Controllers, Eloquent ORM, Blade
- **Base de données** : Migrations, relations, requêtes
- **Validation** : Règles de validation et gestion des erreurs
- **Frontend** : Intégration Blade et Tailwind CSS

---

## Conclusion et apprentissages (suite)

### Difficultés rencontrées et solutions

**Difficulté 1 : Compréhension du routing Laravel**
- Solution : Lecture approfondie de la documentation officielle
- Utilisation de `php artisan route:list` pour visualiser les routes

**Difficulté 2 : Validation des formulaires**
- Solution : Utilisation des Form Requests pour une validation plus propre
- Création de messages d'erreur personnalisés

**Difficulté 3 : Gestion des relations Eloquent**
- Solution : Tests unitaires et utilisation du tinker pour déboguer

---

## Améliorations futures

### Fonctionnalités à ajouter
- **Authentification** : Système de login/logout
- **Autorisation** : Gestion des rôles et permissions
- **Recherche** : Barre de recherche et filtres
- **Upload d'images** : Photos des restaurants
- **API REST** : Endpoints JSON pour une application mobile
- **Pagination** : Pour gérer un grand nombre de restaurants
- **Export** : Exportation en PDF/Excel
- **Géolocalisation** : Carte interactive des restaurants

---

## Conclusion finale

### Ce que j'ai appris

Ce Lab m'a permis de :
- Comprendre les fondamentaux du développement web avec Laravel
- Créer une application complète de A à Z
- Maîtriser le pattern MVC en situation réelle
- Développer de bonnes pratiques de code
- Gérer un projet de manière professionnelle

### Message final

Laravel est un framework puissant qui facilite le développement d'applications web robustes. Ce Lab constitue une base solide pour des projets plus complexes.

**Merci pour votre attention !**

Questions ?

---

## Ressources

### Documentation
- [Laravel Official Documentation](https://laravel.com/docs)
- [PHP Documentation](https://www.php.net/docs.php)
- [Tailwind CSS Documentation](https://tailwindcss.com/docs)

### Dépôt GitHub
- [Lien vers le repository du projet]

### Contact
- Email : [votre-email@example.com]
- GitHub : [votre-username]
