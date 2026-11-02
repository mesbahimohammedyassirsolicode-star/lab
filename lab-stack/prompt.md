# Prompt de création du Lab

## Contexte
Création d'un lab d'introduction aux Labs et à la stack technique du projet de gestion de restaurants.

## Objectif
Permettre aux apprenants de :
- Comprendre le concept de Lab et son utilité pédagogique
- Découvrir la stack technique complète du projet
- Établir le lien entre les Labs et le projet technique final
- Avoir une vue d'ensemble des Labs à réaliser

## Structure demandée

### 1. Présentation (5 slides)
- **Slide 1** : Page de garde
- **Slide 2** : Projet technique (objectifs et fonctionnalités)
- **Slide 3** : Stack technique (frontend, backend, outils)
- **Slide 4** : Comprendre les Labs (définition, utilité, lien avec projet)
- **Slide 5** : Liste des Labs à réaliser

### 2. Documentation README.md
- Objectifs pédagogiques clairs
- Déroulement structuré du lab
- Ressources et liens utiles
- Critères de validation

### 3. Fichier prompt.md
- Contexte de création
- Décisions techniques
- Méthodologie appliquée

## Décisions techniques

### Format de présentation
- **Marp** : Choisi pour sa simplicité (Markdown) et sa compatibilité Git
- Thème par défaut avec customisation minimaliste
- Support des diagrammes avec Mermaid

### Stack technique présentée
#### Frontend
- React.js (v18+) : Framework UI moderne et populaire
- TypeScript : Typage pour réduire les erreurs
- Tailwind CSS : Rapidité de développement
- Vite : Performance de build

#### Backend
- Node.js : JavaScript full-stack
- Express.js : Framework éprouvé et flexible
- PostgreSQL : SGBD relationnel robuste
- Prisma : ORM moderne avec typage automatique

### Organisation des Labs
10 Labs organisés en 3 phases :
1. **Fondations** (Labs 1-3) : Setup et bases
2. **Développement** (Labs 4-7) : Fonctionnalités principales
3. **Qualité & Déploiement** (Labs 8-10) : Tests et mise en production

## Méthodologie appliquée

### Approche pédagogique
- **Progressive** : Du simple au complexe
- **Pratique** : Chaque Lab = un livrable concret
- **Itérative** : Amélioration continue des Labs

### Structure de chaque Lab
- Documentation théorique
- Exercices guidés
- Mini-projet pratique
- Critères de validation clairs

### Lien avec le projet technique
Chaque Lab correspond à une brique fonctionnelle du projet final de gestion de restaurants :
- Lab React → Interface utilisateur
- Lab API → Services backend
- Lab BDD → Persistance des données
- Lab Auth → Sécurité
- etc.

## Livrables du Lab

### Fichiers créés
1. `README.md` - Documentation complète du lab
2. `presentation.md` - Slides de présentation (Marp)
3. `prompt.md` - Ce fichier (traçabilité)

### Compétences développées
- Compréhension de l'architecture technique
- Vision globale d'un projet full-stack
- Méthodologie d'apprentissage par Labs
- Capacité à structurer un projet

## Critères de réussite

### Pour l'apprenant
- ✅ Capable d'expliquer ce qu'est un Lab
- ✅ Identifie toutes les technologies de la stack
- ✅ Comprend le lien entre Labs et projet final
- ✅ Motivé pour commencer les Labs pratiques

### Pour le formateur
- ✅ Support de présentation clair et complet
- ✅ Documentation réutilisable et maintenable
- ✅ Base solide pour les Labs suivants

## Améliorations futures possibles

1. Ajouter des vidéos de démonstration
2. Créer un template de Lab standardisé
3. Intégrer des quiz d'auto-évaluation
4. Développer un système de badges/progression
5. Ajouter des Labs optionnels avancés

## Ressources utilisées

- Documentation officielle React, Node.js, PostgreSQL
- Marp documentation pour le format de présentation
- Best practices de structuration de projet pédagogique
- Retours d'expérience sur l'apprentissage par la pratique

---

**Créé le** : 02 Novembre 2026  
**Version** : 1.0  
**Auteur** : Claude Code
