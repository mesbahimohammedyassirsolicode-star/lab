# Lab Adaptation Skill — Standard Marp Presentation Structure

## Purpose
Adapt and realize any lab deliverable into a consistent, modern Marp presentation while strictly preserving the required structural flow and technical accuracy.

---

## ⚠️ RÈGLE ABSOLUE : Ne JAMAIS Inventer le Problème et la Solution par IA

**L'agent ne doit JAMAIS générer ou inventer par lui-même le contenu des sections Problème et Solution.**

Avant de rédiger la présentation, l'agent **DOIT OBLIGATOIREMENT** dialoguer avec l'étudiant :
1. **Identifier le lab :** Comprendre quel est le sujet exact du lab.
2. **Demander le problème réel :** Demander explicitement à l'étudiant :
   > *« Quel est le problème concret que vous rencontrez / pourquoi avez-vous besoin de ce lab ? »*
3. **Demander la solution réelle :** Demander explicitement à l'étudiant :
   > *« Quelle est votre solution pour résoudre ce problème ? »*
4. **Intégrer les réponses de l'étudiant :** Les slides **Problème** et **Solution** doivent fidèlement retranscrire la vision et la solution de l'étudiant, et non du texte générique inventé par l'IA.

---

## Typologie des Labs : Technique vs Méthodologique

Avant de rédiger un lab, identifier sa nature :

1. **Lab Technique (ex: Laravel, Kotlin, Alpine.js, MySQL, PHP, PHP Native pour mobile, etc.)** :
   - Requiert **OBLIGATOIREMENT** un **Quick Start** (commandes d'installation) et un **Hello World** (code fonctionnel minimal).
2. **Lab Méthodologique / Organisationnel (ex: Lab Planning, Gestion de projet, Architecture, etc.)** :
   - **PAS de Quick Start ni de Hello World de code requis.**
   - La section solution apporte la méthode, les workflows, les règles d'organisation et les livrables pratiques (fichiers templates, processus).

---

## Mandatory Slide Structure

Every lab presentation **must be in Marp format** (`marp: true`) and follow this exact sequential slide structure:

### Slide 1: Title Slide
- **Content:**
  - The **name of the lab** as the main title
  - **Student name:** Mohammed Yassir Mesbahi
  - **Encadrant:** Fouad Essarraj
- **Rule:** Always include both the student and encadrant names on the title slide.

### Slide 2: Plan de Présentation
- **Content:** The agenda of the presentation, strictly formatted as:
  ```markdown
  <!-- _class: light -->

  ## Plan de Présentation

  1. Introduction & Stack Technique
  2. Définitions
  3. Problème
  4. Solution
  ```
- **Rule:** Pas de slide de conclusion dans le plan ni à la fin de la présentation.

### Slide 3: Stack Technique
- Présenter le **stack technique** ou l'écosystème concerné par le lab.
- Exemples :
  - Lab **Laravel** → Stack Backend : Laravel, PHP, Composer, MySQL, Artisan CLI
  - Lab **PHP Native** → Stack Mobile : PHP Native (librairie pour applications mobiles), PHP, Android/iOS runtime
  - Lab **Alpine.js / Tailwind** → Stack Frontend : Alpine.js, HTML, Tailwind CSS & Preline UI (framework de composants)
  - Lab **Kotlin** → Stack Mobile : Kotlin, Android SDK, Gradle
  - Lab **Méthodologique / Planning** → Stack Outils : Markdown, Marp CLI, Git, VS Code
- **Rule:** Lister chaque composant avec une brève description de son utilité.

### Slide 4: Définitions
- Expliquer les **termes techniques** et **concepts clés** que tout développeur ne connaîtrait pas forcément.
- Chaque définition doit être claire, concise et accessible.
- **Rule:** Ne pas présumer que l'audience connaît déjà les termes. Toujours expliquer.
- **Rule:** Si les définitions sont nombreuses, utiliser plusieurs slides (Slide 4a, 4b, etc.).

### Slide 5: Problème (Fourni par l'étudiant)
- **Rule Obligatoire:** Le contenu provient de la réponse de l'étudiant suite à la question posée par l'agent.
- Expliquer **pourquoi ce lab est nécessaire selon l'étudiant**.
- Décrire le **problème concret** que l'étudiant a rencontré ou identifié.
- Montrer les **conséquences négatives** sans ce lab.

### Slide 6+: Solution (Fournie par l'étudiant)
- **Rule Obligatoire:** La démarche de solution provient de l'étudiant.
- **Pour les Labs Techniques (Laravel, Kotlin...)** :
  - Étape 1 : **Quick Start** (commandes d'installation et setup minimal).
  - Étape 2 : **Hello World** (premier exemple minimal et fonctionnel directement exécutable).
  - Étape 3 : Démonstrations et cas pratiques complémentaires.
- **Pour les Labs Méthodologiques / Organisationnels (Planning, Processus...)** :
  - Pas de code Hello World artificiel.
  - Présentation de la démarche, des standards, des étapes de réalisation, et mise à disposition d'outils/templates réutilisables.

---

## Marp Presentation & Design Standards

1. **Always Use Marp:**
   - Every lab must be formatted for Marp with valid YAML frontmatter:
     ```yaml
     ---
     marp: true
     theme: default
     paginate: true
     size: 16:9
     style: |
       ...
     ---
     ```
2. **Slide Separators:**
   - Use `---` between every slide.
3. **Alternating Visual Rhythm:**
   - Alternate between dark background sections (standard) and light background sections (`<!-- _class: light -->`) to maintain audience engagement and high readability.
4. **Typography & Code:**
   - Clear headings (`Anton`, `Impact`, or sans-serif).
   - High contrast body text (`Inter`, system-ui).
   - Always declare syntax languages for code blocks (` ```bash `, ` ```php `, ` ```kotlin `, ` ```html `).
   - Properly format Markdown tables with explicit column alignment (`:---`, `:---:`, `---:`).
5. **Language:**
   - All lab presentations must be written in **French**.
6. **No Conclusion Slide:**
   - Terminer directement sur la solution / livrable, sans slide de conclusion ou de remerciements.

---

## Operational Guidelines

- **Student & Encadrant Names:** Always include on the title slide: Mohammed Yassir Mesbahi (étudiant) and Fouad Essarraj (encadrant).
- **Consultation Préalable Obligatoire:** Toujours demander à l'utilisateur son problème et sa solution avant de rédiger les slides correspondantes. Ne jamais les inventer.
- **Single Deliverable File:** Keep all documentation and examples inside the designated lab file (e.g. `lab-<topic>.md`).
- **No Git Inquiries:** Do not run git commands if the user specifies not to use git.
- **Distinguer Technique vs Méthodologique:** Only technical labs require Quick Start & Hello World. Methodological labs focus on process and usable artifacts.
- **Définitions Obligatoires:** Never skip the Definitions slide — always explain key terms even if they seem basic.
