---
marp: true
theme: default
paginate: true
style: |
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap');
  
  section {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 60px;
  }
  
  section.title {
    background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
  }
  
  section.content {
    background: white;
    color: #1e293b;
  }
  
  h1 {
    font-size: 3em;
    font-weight: 700;
    margin-bottom: 0.5em;
    color: #fbbf24;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
  }
  
  h2 {
    font-size: 1.8em;
    font-weight: 600;
    color: #fbbf24;
    margin-bottom: 0.8em;
    border-bottom: 3px solid #fbbf24;
    padding-bottom: 0.3em;
  }
  
  h3 {
    font-size: 1.4em;
    font-weight: 600;
    color: #fcd34d;
    margin-top: 1em;
  }
  
  section.content h2 {
    color: #3b82f6;
    border-bottom-color: #3b82f6;
  }
  
  section.content h3 {
    color: #1e3a8a;
  }
  
  ul, ol {
    font-size: 1.1em;
    line-height: 1.8;
  }
  
  li {
    margin: 0.5em 0;
  }
  
  strong {
    color: #fcd34d;
  }
  
  section.content strong {
    color: #3b82f6;
  }
  
  blockquote {
    border-left: 5px solid #fbbf24;
    padding-left: 20px;
    font-style: italic;
    font-size: 1.2em;
    background: rgba(255,255,255,0.1);
    padding: 15px 20px;
    border-radius: 8px;
  }
  
  section.content blockquote {
    border-left-color: #3b82f6;
    background: #eff6ff;
    color: #1e3a8a;
  }
  
  table {
    width: 100%;
    border-collapse: collapse;
    margin: 1em 0;
    background: rgba(255,255,255,0.1);
    border-radius: 8px;
    overflow: hidden;
  }
  
  section.content table {
    background: white;
    border: 2px solid #e2e8f0;
  }
  
  th {
    background: rgba(0,0,0,0.3);
    padding: 15px;
    font-weight: 600;
    font-size: 1.1em;
  }
  
  section.content th {
    background: #3b82f6;
    color: white;
  }
  
  td {
    padding: 12px 15px;
    border-bottom: 1px solid rgba(255,255,255,0.2);
  }
  
  section.content td {
    border-bottom-color: #e2e8f0;
  }
  
  code {
    background: rgba(0,0,0,0.3);
    padding: 2px 8px;
    border-radius: 4px;
    font-family: 'Fira Code', monospace;
  }
  
  section.content code {
    background: #f1f5f9;
    color: #be123c;
  }
  
  pre {
    background: rgba(0,0,0,0.4);
    padding: 20px;
    border-radius: 8px;
    overflow-x: auto;
  }
  
  section.content pre {
    background: #1e293b;
  }
  
  pre code {
    background: transparent;
    color: #e2e8f0;
  }
  
  footer {
    font-size: 0.8em;
    color: rgba(255,255,255,0.7);
  }
  
  header {
    font-size: 0.9em;
    font-weight: 600;
  }
---

<!-- _class: title -->
<!-- _paginate: false -->
<!-- _header: "" -->
<!-- _footer: "" -->

![width:200px](logo-ofppt.png)    ![width:200px](logo-solicode.png)

# 🍽️ Plateforme de Gestion des Restaurants

### Système de Gestion Intégré pour Restaurateurs Modernes

<br/>

**Apprenant :** Mohammed Yassir MESBAHI
**Encadrant :** ES-SARRAJ Fouad

📅 Novembre 2026 | 🏢 OFPPT Solicode

---

<!-- _class: content -->

# 📋 Introduction

## Présentation du Projet

Une **plateforme de gestion complète** pour les restaurants modernes qui révolutionne la gestion quotidienne.

### Objectifs principaux

- 🍽️ Digitaliser la gestion des menus
- 📅 Simplifier le système de réservations
- 📱 Optimiser la prise de commandes
- ✨ Améliorer l'expérience client et restaurateur

> "Transformer la gestion traditionnelle des restaurants en une solution digitale moderne et efficace"

---

<!-- _class: content -->

# ⚠️ Besoin

## Problématique

Les restaurants font face à plusieurs défis quotidiens qui impactent leur efficacité.

### Problèmes identifiés

- 📋 **Gestion manuelle** des menus et plats
- 📞 **Réservations téléphoniques** inefficaces et sources d'erreurs
- 📝 **Commandes sur papier** difficiles à suivre
- ❌ **Absence de statistiques** en temps réel
- 🔄 **Coordination difficile** entre salle et cuisine

---

<!-- _class: content -->

# 💡 Solution Proposée

## Notre Plateforme Offre

- ✅ Interface intuitive pour gérer les menus
- ✅ Système de réservation en ligne 24/7
- ✅ Application de prise de commande digitale
- ✅ Dashboard avec statistiques en temps réel
- ✅ Communication instantanée cuisine-salle

---

<!-- _class: content -->

# 🔍 Analyse

## Étude des Besoins

### Acteurs du Système

- 👨‍💼 **Gérant** : gestion complète du restaurant
- 👨‍🍳 **Cuisinier** : préparation des plats et suivi des commandes
- 🧑‍💼 **Serveur** : prise de commandes et service
- 👥 **Client** : réservations et consultation du menu

---

<!-- _class: content -->

# 📊 Fonctionnalités Principales

| Module | Fonctionnalités |
|:---|:---|
| **Gestion des Menus** | CRUD plats, catégories, prix, disponibilité |
| **Réservations** | Calendrier, gestion des tables, confirmations |
| **Commandes** | Prise de commande, suivi en temps réel, historique |
| **Cuisine** | Écran des commandes en cours, mise à jour des statuts |
| **Statistiques** | Chiffre d'affaires, plats populaires, taux d'occupation |

---

<!-- _class: content -->

# 🏗️ Conception

## Architecture du Système

### Architecture MVC avec Laravel

```
┌─────────────────────────────────────┐
│  Frontend (Alpine.js + Tailwind)   │
├─────────────────────────────────────┤
│     API REST (Laravel/Sanctum)     │
├─────────────────────────────────────┤
│   Base de Données (MySQL 8)        │
└─────────────────────────────────────┘
```

---

<!-- _class: content -->

# 📐 Modèle de Données

### Entités Principales

- 🏪 **Restaurant** (nom, adresse, horaires, capacité)
- 📋 **Menu** (catégories, plats, prix)
- 🍕 **Plat** (nom, description, prix, image, disponibilité)
- 📅 **Réservation** (client, date, heure, nombre de personnes, table)
- 🛒 **Commande** (table, plats, statut, montant total)
- 👤 **Utilisateur** (nom, email, rôle, permissions)

---

<!-- _class: content -->

# 🔄 Diagramme de Flux

### Use Case : Gestion d'une Commande

1. 📱 Serveur consulte le menu disponible
2. ✍️ Prend la commande du client
3. 📤 Commande transmise instantanément à la cuisine
4. 👨‍🍳 Cuisinier met à jour le statut de préparation
5. 🍽️ Serveur est notifié et sert le plat
6. 💰 Génération automatique de la facture

---

<!-- _class: content -->

# 💻 Réalisation

## Stack Technique

### Backend
- ⚙️ **Laravel 10** - Framework PHP moderne
- 🗄️ **MySQL 8** - Base de données relationnelle
- 🔐 **Laravel Sanctum** - Authentification API sécurisée
- 📦 **Eloquent ORM** - Gestion élégante des données

### Frontend
- ⚡ **Alpine.js** - Framework JavaScript léger et réactif
- 🎨 **Tailwind CSS** - Framework CSS utility-first
- 🖼️ **Blade Templates** - Moteur de templates Laravel

---

<!-- _class: content -->

# ⚙️ Configuration Technique

## Dépendances Laravel

```json
{
  "require": {
    "laravel/framework": "^10.0",
    "laravel/sanctum": "^3.0",
    "spatie/laravel-permission": "^5.0"
  }
}
```

### Architecture des Dossiers
```
app/Models/              → Plat, Commande, Reservation
app/Http/Controllers/    → API et Web Controllers
resources/views/         → Interfaces Blade + Alpine.js
routes/api.php          → Routes API REST
```

---

<!-- _class: content -->

# 👨‍💻 Exemple de Code

## Contrôleur des Plats

```php
class PlatController extends Controller
{
    public function index()
    {
        return Plat::with('categorie')
            ->where('disponible', true)
            ->orderBy('categorie_id')
            ->get();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'prix' => 'required|numeric|min:0',
            'categorie_id' => 'required|exists:categories,id'
        ]);
        
        return Plat::create($validated);
    }
}
```

---

<!-- _class: content -->

# 🎯 Prototype et Fonctionnalités

## Réalisations Complétées

- ✅ Dashboard gérant avec statistiques en temps réel
- ✅ Module complet de gestion des catégories
- ✅ CRUD des plats avec upload d'images
- ✅ API REST complète et documentée
- ✅ Interface responsive (mobile/tablet/desktop)
- 🔄 Module de réservation (en cours de finalisation)
- 🔄 Écran cuisine temps réel (en développement)

---

<!-- _class: content -->

# 📸 Captures d'Écran

![width:1000px](dashboard.png)

**Dashboard Principal** - Vue d'ensemble des statistiques et de l'activité du restaurant

---

<!-- _class: content -->

# 🎯 Conclusion

## Résultats Obtenus

### Réalisations

- ✅ Plateforme fonctionnelle et stable
- ✅ Interface moderne et intuitive
- ✅ API REST complète et sécurisée
- ✅ Code maintenable et bien documenté
- ✅ Tests unitaires et d'intégration
- ✅ Performance optimisée

---

<!-- _class: content -->

# 🚀 Perspectives d'Évolution

## Améliorations Futures

- 🎁 **Module de fidélité** - Programmes de récompenses clients
- 📱 **Application mobile native** - iOS et Android
- 💳 **Paiement en ligne** - Intégration stripe/PayPal
- 📊 **Analytics avancées** - Prédictions avec IA
- 🌐 **Support multi-restaurants** - Gestion de chaînes
- 🔔 **Notifications push** - Alertes en temps réel

---

<!-- _class: content -->

# 🎓 Compétences Acquises

## Compétences Techniques

- 💻 Développement full-stack avec Laravel
- 🏗️ Architecture MVC et API REST
- 🔐 Gestion d'authentification et permissions
- 🎨 Design responsive avec Tailwind CSS
- 🗄️ Modélisation et optimisation de bases de données

## Gestion de Projet

- 📋 Analyse des besoins utilisateurs
- 📐 Conception de systèmes complexes
- 🔄 Versioning avec Git/GitHub
- 📝 Documentation technique professionnelle

---

<!-- _class: title -->
<!-- _paginate: false -->

# 🙏 Merci pour votre attention !

## Questions ?

<br/>

**Démo en ligne :** https://demo-restaurant.solicode.ma
**Code source :** https://github.com/solicode/restaurant-management

<br/>

### 📧 Contact

**Mohammed Yassir MESBAHI** - mesbahi@solicode.ma

---

<!-- _paginate: false -->
<!-- _footer: '' -->
<!-- _class: title -->

# 📞 Informations de Contact

<br/>

**Apprenant**
Mohammed Yassir MESBAHI
📧 mesbahi@solicode.ma

**Encadrant**
ES-SARRAJ Fouad
📧 Solicode - Formation Développement Digital

<br/>

**OFPPT Solicode © 2026**
