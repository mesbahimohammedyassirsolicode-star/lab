
<!-- _class: title -->

# Lab Prompt Engineering

**Étudiant :** Mohammed Yassir Mesbahi  
**Encadrant :** ES-SARRAJ Fouad

---

<!-- _class: light -->

## Plan de Présentation

1. Introduction & Stack Technique
2. Définitions
3. Problème
4. Solution
5. Méthodes de Prompt Engineering
6. Pratique

---

## Stack Technique

**Outils d'Intelligence Artificielle pour le Développement**

- **ChatGPT** : Assistant IA conversationnel d'OpenAI pour génération de texte et code
- **GitHub Copilot** : Assistant de codage IA intégré dans VS Code
- **Claude** : Assistant IA d'Anthropic pour analyse et génération de contenu
- **Laravel** : Framework PHP utilisé dans les exemples pratiques
- **Git** : Contrôle de version pour la documentation technique

---

<!-- _class: light -->

## Définitions

### Prompt
Une demande ou instruction écrite pour une intelligence artificielle. Un prompt bien rédigé produit une réponse précise et adaptée au besoin.

### Prompt Engineering
Discipline consistant à concevoir et optimiser des prompts pour obtenir les meilleurs résultats d'une IA. Nécessite clarté, contexte et structure.

---

## Définitions (suite)

### Token
Unité de traitement du texte par l'IA (mot, partie de mot ou symbole). Les modèles IA ont des limites de tokens (contexte) qui impactent la longueur des prompts et réponses.

### Few-Shot Learning
Méthode consistant à fournir des exemples à l'IA avant de demander une nouvelle tâche similaire. L'IA apprend du pattern et l'applique.

---

<!-- _class: light -->

## Problème

**Les développeurs utilisent l'IA (ChatGPT, Copilot) quotidiennement, mais obtiennent souvent des réponses imprécises ou inadaptées.**

### Conséquences d'un mauvais prompt :

- **Réponses vagues ou hors sujet** : L'IA ne comprend pas exactement ce qui est demandé
- **Code généré non adapté** : Ne correspond pas au contexte du projet (Laravel vs Symfony)
- **Perte de temps** : Multiples itérations pour reformuler la demande
- **Résultats non professionnels** : Documentation ou code de qualité insuffisante
- **Dépendance excessive** : Impossibilité de vérifier ou corriger les réponses de l'IA

---

## Solution

**Apprendre les méthodes de Prompt Engineering pour communiquer efficacement avec l'IA et obtenir des résultats exploitables professionnellement.**

### Objectifs d'apprentissage :

1. Comprendre le fonctionnement des prompts et leur structure
2. Maîtriser les méthodes RTF, IPO et CRISPE
3. Utiliser le Few-Shot Learning pour des résultats précis
4. Tester et améliorer itérativement ses prompts
5. Intégrer l'IA dans le workflow de développement quotidien

---

<!-- _class: light -->

## Méthode 1 : RTF (Rôle-Tâche-Format)

### Structure simple pour prompts directs

| Élément | Question | Exemple |
|:--------|:---------|:--------|
| **R**ôle | Qui est l'IA ? | "Tu es un formateur Laravel" |
| **T**âche | Que doit-elle faire ? | "Explique les migrations Laravel" |
| **F**ormat | Comment présenter ? | "En 5 étapes avec exemple de code" |

### Exemple complet :

```
Tu es un formateur Laravel. Explique les migrations Laravel 
à un débutant. Utilise cinq étapes claires et ajoute un 
exemple de code commenté.
```

**✓ Idéal pour :** Questions simples, explications rapides, génération de code

---

## Méthode 2 : IPO (Input-Process-Output)

### Structure pour organiser les prompts complexes

| Élément | Signification | Usage |
|:--------|:--------------|:------|
| **I**nput | Entrée | Informations et contexte fournis |
| **P**rocess | Traitement | Le travail à réaliser par l'IA |
| **O**utput | Sortie | Format et structure du résultat attendu |

### Exemple : Migration Laravel

**Input :** "Je connais PHP et MySQL. Je débute avec Laravel."

**Process :** "Explique comment créer une migration pour une table 'restaurants' avec colonnes : nom (string), adresse (text), note (decimal)."

**Output :** "Donne la commande artisan, le code de migration commenté, et un exemple de rollback."

**✓ Idéal pour :** Demandes structurées, génération de documentation

---

<!-- _class: light -->

## Méthode 3 : CRISPE (Détails avancés)

### Structure complète pour prompts professionnels

| Lettre | Signification | Exemple |
|:-------|:--------------|:--------|
| **C**apacity | Compétence | "Tu connais Laravel, Alpine.js et Tailwind" |
| **R**ole | Rôle | "Tu es un développeur senior full-stack" |
| **I**nsight | Contexte | "Projet de gestion de restaurants avec API REST" |
| **S**tatement | Instruction | "Crée un contrôleur CRUD pour les restaurants" |
| **P**ersonality | Style | "Code PSR-12, commentaires en français" |
| **E**xperiment | Variantes | "Propose deux approches : Resource Controller vs Custom" |

**✓ Idéal pour :** Génération de code complexe, architecture, décisions techniques

---

## Méthode 3 : CRISPE — Exemple complet

```
C - Tu maîtrises Laravel 11, Eloquent ORM et les bonnes pratiques PHP.

R - Tu es un développeur backend Laravel senior.

I - Je développe une application de gestion de restaurants. 
    Les apprenants connaissent PHP mais découvrent Laravel.
    Le projet utilise MySQL et suit PSR-12.

S - Crée un modèle Restaurant avec ses relations (Menu, Reservation) 
    et un contrôleur CRUD avec validation des données.

P - Code commenté en français. Explique les choix architecturaux. 
    Suit les conventions Laravel (naming, structure).

E - Propose deux options : 
    1. Resource Controller avec Form Requests
    2. Custom Controller avec validation inline
```

---

<!-- _class: light -->

## Méthode 4 : Few-Shot Learning

### Apprendre par l'exemple

Donner un ou plusieurs exemples à l'IA avant de demander un nouveau travail similaire.

### Exemple : Standardiser les messages de commit

**Prompt Few-Shot :**

```
Voici des exemples de messages de commit dans ce projet :

- feat: add restaurant CRUD operations
- fix: resolve validation error in RestaurantController
- docs: update README with installation steps

En suivant ce format, écris un message de commit pour :
"Ajout d'un système de réservation en ligne"
```

**Résultat attendu :** `feat: add online reservation system`

**✓ Idéal pour :** Formats spécifiques, cohérence de style, templates personnalisés

---

## Processus d'amélioration itérative

### Cycle Test-Correction-Retest

1. **Écrire** : Rédiger le prompt initial
2. **Tester** : Envoyer à l'IA et observer la réponse
3. **Analyser** : Identifier les points faibles
4. **Corriger** : Ajuster le prompt (plus de contexte, format différent)
5. **Retester** : Vérifier l'amélioration

### Exemple d'itération :

| Version | Prompt | Problème |
|:--------|:-------|:---------|
| v1 | "Explique Laravel" | Trop vague, réponse générique |
| v2 | "Explique les migrations Laravel" | Mieux, mais niveau inconnu |
| v3 | "Explique les migrations Laravel à un débutant PHP. Utilise un exemple de table 'restaurants'." | ✓ Précis et contextualisé |

---

<!-- _class: light -->

## Cas d'usage quotidiens pour développeurs

### Pour apprendre

```markdown
**RTF :**
Tu es un formateur. Explique le pattern Repository dans Laravel. 
Donne un exemple concret avec le modèle Restaurant. 
Format : 3 paragraphes + code commenté.
```

### Pour écrire

```markdown
**IPO :**
INPUT : Voici mon code de contrôleur [coller le code].
PROCESS : Améliore les commentaires et la lisibilité.
OUTPUT : Code réécrit avec PHPDoc et commentaires explicatifs.
```

---

## Cas d'usage quotidiens (suite)

### Pour programmer

```markdown
**CRISPE :**
C - Tu maîtrises Laravel et les tests unitaires avec PHPUnit.
R - Tu es un développeur TDD (Test-Driven Development).
I - Application Laravel 11. Modèle Restaurant avec CRUD.
S - Écris les tests unitaires pour RestaurantController.
P - Utilise les factories Laravel. Commente les assertions.
E - Teste les cas : création valide, validation échouée, suppression.
```

### Pour déboguer

```markdown
**Few-Shot :**
Voici l'erreur : [copier le message d'erreur]
Voici le code concerné : [copier l'extrait de code]

Explique l'erreur et propose une correction.
Format : Cause → Solution → Code corrigé.
```

---

<!-- _class: light -->

## Pratique : Exercice guidé

### Objectif
Créer un prompt efficace pour générer un modèle Laravel complet.

### Contexte du projet
- Application : Gestion de restaurants
- Framework : Laravel 11
- Base de données : MySQL
- Besoin : Modèle `Restaurant` avec relations

### Travail à réaliser

Rédiger un prompt utilisant la méthode **CRISPE** pour obtenir :
1. Le modèle `Restaurant` avec attributs et relations
2. La migration correspondante
3. Les factories pour les tests
4. Un exemple de données (seeder)

---

## Pratique : Solution proposée

```markdown
**Capacity :** Tu maîtrises Laravel 11, Eloquent ORM, les migrations 
et les factories.

**Role :** Tu es un développeur backend Laravel expert.

**Insight :** Je développe une application de gestion de restaurants. 
Chaque restaurant a : nom, adresse, téléphone, email, description, 
note moyenne. Un restaurant a plusieurs menus et réservations.

**Statement :** Crée le modèle Restaurant avec :
- Tous les attributs
- Relations : hasMany Menu, hasMany Reservation
- Casts et mutateurs si nécessaires
Ajoute la migration, la factory et un seeder.

**Personality :** Code PSR-12. Commentaires en français. 
Nomme les colonnes en snake_case.

**Experiment :** Propose deux options de validation :
1. Validation dans le modèle (attributs $fillable)
2. Form Request séparé
```

---

<!-- _class: light -->

## Bonnes pratiques

### À FAIRE ✓

- **Être spécifique** : "Explique les migrations" → "Explique comment créer une migration Laravel pour une table 'restaurants'"
- **Donner du contexte** : Niveau de compétence, projet, technologies utilisées
- **Définir le format** : "Liste à puces", "Code commenté", "Tableau comparatif"
- **Tester et ajuster** : Améliorer le prompt si la réponse n'est pas satisfaisante
- **Vérifier les résultats** : Toujours relire et tester le code généré

---

## Bonnes pratiques (suite)

### À ÉVITER ✗

- **Prompts vagues** : "Explique Laravel" (trop large)
- **Pas de contexte** : L'IA ne connaît pas votre niveau ni votre projet
- **Attentes irréalistes** : L'IA peut faire des erreurs, surtout sur du code complexe
- **Copier-coller aveugle** : Toujours comprendre et vérifier le code généré
- **Négliger la sécurité** : Vérifier les vulnérabilités (injection SQL, XSS, etc.)

---

<!-- _class: light -->

## Limites et précautions

### Limites de l'IA

- **Connaissance figée** : Données d'entraînement jusqu'à une date précise (cutoff)
- **Hallucinations** : Peut inventer des fonctions ou packages inexistants
- **Contexte limité** : Ne connaît pas votre codebase spécifique
- **Erreurs subtiles** : Peut produire du code syntaxiquement correct mais logiquement faux

### Précautions à prendre

⚠️ **Toujours vérifier** le code généré avant de l'utiliser  
⚠️ **Tester** les fonctionnalités produites par l'IA  
⚠️ **Ne pas partager** d'informations sensibles (mots de passe, clés API)  
⚠️ **Comprendre** le code avant de l'intégrer dans votre projet  
⚠️ **Utiliser l'IA comme assistant**, pas comme remplacement de la réflexion

---

## Ressources et outils

### Outils IA pour développeurs

- **ChatGPT** : [chat.openai.com](https://chat.openai.com) — Conversations et génération
- **GitHub Copilot** : Extension VS Code — Auto-complétion de code
- **Claude** : [claude.ai](https://claude.ai) — Analyse de documents et code
- **Phind** : [phind.com](https://www.phind.com) — Moteur de recherche pour développeurs

### Documentation

- **Prompt Engineering Guide** : [promptingguide.ai](https://www.promptingguide.ai)
- **OpenAI Best Practices** : [platform.openai.com/docs](https://platform.openai.com/docs/guides/prompt-engineering)
- **Learn Prompting** : [learnprompting.org](https://learnprompting.org)

---

<!-- _class: light -->

## Récapitulatif

### Méthodes apprises

| Méthode | Usage | Complexité |
|:--------|:------|:-----------|
| **RTF** | Prompts simples et directs | ⭐ Facile |
| **IPO** | Structurer demandes complexes | ⭐⭐ Moyen |
| **CRISPE** | Prompts professionnels détaillés | ⭐⭐⭐ Avancé |
| **Few-Shot** | Apprendre par l'exemple | ⭐⭐ Moyen |

### Points clés

✓ Un prompt clair = réponse précise  
✓ Le contexte est essentiel (niveau, projet, format)  
✓ Tester et améliorer itérativement  
✓ Toujours vérifier et comprendre les résultats  
✓ L'IA est un assistant, pas un remplacement du développeur

---

## Conclusion

### Compétences acquises

- **Structurer des prompts efficaces** avec les méthodes RTF, IPO et CRISPE
- **Donner du contexte** pour obtenir des réponses adaptées
- **Utiliser le Few-Shot Learning** pour des formats spécifiques
- **Améliorer itérativement** ses prompts par test et correction
- **Intégrer l'IA** dans le workflow de développement quotidien

### Application pratique

Le Prompt Engineering n'est pas une compétence théorique, mais un outil quotidien pour :
- Apprendre plus rapidement de nouvelles technologies
- Générer du code de meilleure qualité
- Résoudre des problèmes complexes avec assistance
- Produire de la documentation efficacement

**L'IA est un partenaire de développement, pas un substitut à la compétence technique.**

---

<!-- _class: light -->

## Exercices supplémentaires

### Exercice 1 : RTF Simple
Écrivez un prompt RTF pour demander à l'IA d'expliquer les routes Laravel à un débutant, en 4 étapes avec un exemple.

### Exercice 2 : IPO Structuré
Utilisez IPO pour demander la création d'un middleware Laravel qui vérifie si l'utilisateur est administrateur.

### Exercice 3 : CRISPE Complet
Rédigez un prompt CRISPE pour générer un système d'authentification complet avec Laravel Breeze.

### Exercice 4 : Few-Shot
Créez un prompt Few-Shot pour standardiser les noms de variables dans votre projet (exemple : camelCase vs snake_case).

---

## Pour aller plus loin

### Techniques avancées

- **Chain of Thought** : Demander à l'IA d'expliquer son raisonnement étape par étape
- **Tree of Thoughts** : Explorer plusieurs solutions et choisir la meilleure
- **Self-Consistency** : Demander plusieurs réponses et comparer
- **Prompt Chaining** : Enchaîner plusieurs prompts pour des tâches complexes

### Applications professionnelles

- **Code Review** : Demander à l'IA de vérifier et améliorer votre code
- **Documentation** : Générer automatiquement des commentaires et README
- **Tests** : Créer des tests unitaires et d'intégration
- **Refactoring** : Améliorer la structure et la lisibilité du code

---

<!-- _class: light -->

## Questions fréquentes

**Q : L'IA peut-elle remplacer un développeur ?**  
R : Non. L'IA est un outil d'assistance. Elle génère du code mais ne comprend pas le contexte métier, ne teste pas en conditions réelles et peut produire des erreurs.

**Q : Comment savoir si une réponse de l'IA est correcte ?**  
R : Toujours vérifier : tester le code, consulter la documentation officielle, comprendre la logique avant d'intégrer.

**Q : Faut-il apprendre par cœur les méthodes ?**  
R : Non. Comprendre les principes (contexte, clarté, format) est plus important que mémoriser les acronymes.

**Q : Peut-on utiliser l'IA pour les examens ?**  
R : Cela dépend des règles de votre établissement. L'essentiel est de comprendre ce que vous soumettez.

---

## Références

### Cours et formation

- **Formation Prompt Engineering (ce document)** : Méthodes RTF, IPO, CRISPE
- **Laravel Documentation** : [laravel.com/docs](https://laravel.com/docs)

### Articles et guides

- **Anthropic Prompt Engineering** : [docs.anthropic.com/claude/docs/intro-to-prompting](https://docs.anthropic.com/claude/docs/intro-to-prompting)
- **Google AI Prompt Guide** : [ai.google.dev/docs/prompt_best_practices](https://ai.google.dev/docs/prompt_best_practices)

### Communautés

- **Reddit r/PromptEngineering** : Partage d'expériences et techniques
- **Discord AI Dev** : Discussions sur l'utilisation de l'IA en développement

---

<!-- _class: title -->

# Merci !

**Questions ?**

Mohammed Yassir Mesbahi  
Encadré par ES-SARRAJ Fouad

---
