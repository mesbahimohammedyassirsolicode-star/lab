---
marp: true
theme: default
paginate: true
style: |
  section {
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 42px 54px;
    font-size: 24px;
    line-height: 1.35;
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
    font-size: 2em;
    font-weight: 700;
    line-height: 1.15;
    margin: 0 0 0.45em;
    color: #fbbf24;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
  }
  
  h2 {
    font-size: 1.25em;
    font-weight: 600;
    color: #fbbf24;
    margin: 0.3em 0 0.55em;
    border-bottom: 2px solid #fbbf24;
    padding-bottom: 0.2em;
  }
  
  h3 {
    font-size: 1.05em;
    font-weight: 600;
    color: #fcd34d;
    margin: 0.55em 0 0.25em;
  }
  
  section.content h2 {
    color: #3b82f6;
    border-bottom-color: #3b82f6;
  }
  
  section.content h3 {
    color: #1e3a8a;
  }

  p {
    margin: 0.4em 0;
  }
  
  ul, ol {
    font-size: 0.92em;
    line-height: 1.4;
    margin: 0.35em 0;
    padding-left: 1.25em;
  }
  
  li {
    margin: 0.18em 0;
  }
  
  strong {
    color: #fcd34d;
  }
  
  section.content strong {
    color: #3b82f6;
  }
  
  blockquote {
    border-left: 4px solid #fbbf24;
    margin: 0.6em 0;
    padding: 0.5em 0.8em;
    font-style: italic;
    background: rgba(255,255,255,0.1);
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
    margin: 0.55em 0;
    font-size: 0.75em;
    line-height: 1.25;
    background: white;
    color: #1e293b;
  }
  
  section.content table {
    background: white;
    border: 2px solid #e2e8f0;
  }
  
  th {
    background: #2563eb;
    color: white;
    padding: 8px 10px;
    font-weight: 600;
  }
  
  section.content th {
    background: #3b82f6;
    color: white;
  }
  
  td {
    padding: 7px 10px;
    border-bottom: 1px solid #e2e8f0;
    overflow-wrap: anywhere;
  }
  
  section.content td {
    border-bottom-color: #e2e8f0;
  }
  
  code {
    background: #e2e8f0;
    color: #be123c;
    padding: 1px 5px;
    border-radius: 4px;
    font-family: Consolas, 'Courier New', monospace;
  }
  
  section.content code {
    background: #f1f5f9;
    color: #be123c;
  }
  
  pre {
    box-sizing: border-box;
    max-height: 340px;
    margin: 0.45em 0;
    background: #1e293b;
    color: #e2e8f0;
    padding: 12px 16px;
    border-radius: 8px;
    overflow-x: auto;
    overflow-y: auto;
  }
  
  pre code, section.content pre code {
    background: transparent;
    color: #e2e8f0;
    padding: 0;
    font-size: 0.72em;
    line-height: 1.25;
  }

  img {
    max-width: 100%;
    height: auto;
    object-fit: contain;
  }

  section.title img {
    max-height: 90px;
    width: auto;
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

<!--
Présenter le projet pour les restaurants.
Dire les sujets : les besoins, les idées et le travail.
Dire : le but est de mieux gérer le restaurant.
-->

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

<!--
Dire pourquoi ce projet est utile.
Présenter les quatre buts de la plateforme.
Dire que l'outil aide le client et l'équipe du restaurant.
-->

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

<!--
Expliquer les problèmes du travail sur papier.
Donner un exemple : une réservation peut être oubliée.
Dire que ces problèmes rendent le travail plus difficile.
-->

---

<!-- _class: content -->

# 💡 Solution Proposée

## Notre Plateforme Offre

- ✅ Interface intuitive pour gérer les menus
- ✅ Système de réservation en ligne 24/7
- ✅ Application de prise de commande digitale
- ✅ Dashboard avec statistiques en temps réel
- ✅ Communication instantanée cuisine-salle

<!--
Dire que la plateforme aide à résoudre ces problèmes.
Elle aide le gérant, le cuisinier et le client.
Tout est dans un seul outil.
-->

---

<!-- _class: content -->

# 🔍 Analyse

## Étude des Besoins

### Acteurs du Système

- 👨‍💼 **Gérant** : gestion complète du restaurant
- 👨‍🍳 **Cuisinier** : préparation des plats et suivi des commandes
- 🧑‍💼 **Serveur** : prise de commandes et service
- 👥 **Client** : réservations et consultation du menu

<!--
Présenter les quatre personnes qui utilisent le système.
Chaque personne a un travail différent.
Le système donne à chacun les bons outils.
-->

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

<!--
Présenter les grands outils de la plateforme.
Une réservation peut devenir une commande, puis un plat.
Les chiffres aident le gérant à suivre le restaurant.
-->

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

<!--
Montrer les trois parties du système.
Laravel fait le lien entre l'écran et les données.
Cette organisation aide à modifier le système plus tard.
-->

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

<!--
Présenter les données importantes du système.
Un menu contient des plats. Le client peut faire une réservation et une commande.
Chaque utilisateur a un rôle dans le système.
-->

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

<!--
Raconter les étapes de la commande, du menu à la facture.
La cuisine reçoit la commande rapidement.
Le serveur et le cuisinier peuvent suivre la commande.
-->

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

<!--
Laravel et MySQL sont les outils principaux du serveur.
Sanctum aide à vérifier les utilisateurs.
Alpine.js, Tailwind et Blade servent à faire les pages.
-->

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

<!--
Cette liste montre les outils utilisés dans le projet.
Les dossiers séparent les modèles, les pages et les routes.
Cette organisation aide à trouver les fichiers.
-->

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

<!--
Ce code montre comment le système gère les plats.
Il montre seulement les plats disponibles et leur catégorie.
Le système vérifie les informations avant d'ajouter un plat.
-->

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

<!--
Présenter ce qui est déjà terminé et ce qui continue.
Le tableau de bord et la gestion des plats sont prêts.
Les réservations et l'écran de cuisine sont encore en travail.
-->

---

<!-- _class: content -->

# 📸 Captures d'Écran

![width:1000px](dashboard.png)

**Dashboard Principal** - Vue d'ensemble des statistiques et de l'activité du restaurant

<!--
Présenter les informations sur cette image.
Le gérant voit vite les activités du restaurant.
Montrer la même page dans la démonstration si possible.
-->

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

<!--
Présenter les résultats principaux du projet.
Dire que la plateforme est simple, stable et sûre.
Dire que les buts principaux sont atteints.
-->

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

<!--
Présenter des idées pour le futur, pas des outils déjà prêts.
Parler de l'application mobile et du paiement en ligne.
Ces idées peuvent aider le projet à grandir.
-->

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

<!--
Présenter les compétences apprises pendant ce projet.
Parler aussi de l'analyse, des idées et des documents.
Ces compétences seront utiles dans d'autres projets.
-->

---

<!-- _class: title -->
<!-- _paginate: false -->

# 🙏 Merci pour votre attention !

## Questions ?

<br/>

**Démo en ligne :** https://demo-restaurant.solicode.ma
**Code source :** https://github.com/solicode/restaurant-management

<br/>

<!--
Remercier le jury et le public.
Inviter les personnes à poser des questions.
Proposer de montrer le site ou le code du projet.
-->
