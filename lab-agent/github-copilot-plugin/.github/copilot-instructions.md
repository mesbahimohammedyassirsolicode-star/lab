# Lab Skills Engineering - GitHub Copilot Instructions

## Project Context

This workspace contains AI skills for assisting full-stack prototype development in academic projects. The approach follows a 6-phase lab methodology with specialized technical skills.

## Stack & Technologies

- **Backend:** Laravel 11 / PHP 8.2+ (Eloquent ORM, FormRequests, Migrations)
- **Frontend:** Alpine.js (reactive directives), Tailwind CSS, Preline UI components
- **Database:** MySQL/MariaDB
- **Development:** Windows environment, PowerShell commands

## Core Principles

### Skill Architecture (3-Tier System)

1. **Meta-Governance** (`plugin-dev`): Designs and validates skills according to 10 official Anthropic rubrics
2. **Meta-Methodology** (`lab-dev`): Guides the 6-step workflow, validates deliverables for instructor presentations
3. **Technical Skills** (e.g., `lab-skill-engineering`): Specialized competencies carrying technical rules for each subject

### Granularity Rules

**RECOMMENDED (Meso-Level):** One dedicated technical skill per lab subject
- Maintains focused context
- Clear rules per technology
- Progressive learning per sprint

**AVOID:**
- Macro (Monolithic mega-skill): Saturates context window, dilutes focus
- Micro (Over-fragmentation): Creates orchestration complexity and conflicts

### Single Source of Truth (SSOT) & DRY

- Permanent cross-cutting constraints: `.agent/rules/`
- Specialized skill resources: `<skill>/resources/`
- Never duplicate instructions across files
- Reference existing rules instead of rewriting

## Lab Workflow (6 Phases)

### Phase 1: Need Analysis & Framing
- Identify technical prototype component
- Formulate core technical question
- Complete `README.md` and `1.besoin/contexte-et-besoin.md`

### Phase 2: Technology Watch & State of the Art
- Research GitHub repos, official docs (Anthropic, Laravel, Tailwind)
- List existing tools by relevance
- Document in `2.veille/veille-technologique.md`

### Phase 3: Technical Skill Specification
- Define skill name (kebab-case: `lab-[subject]`)
- Write 3-5 mandatory technical rules
- Document in `3.skill-technique/spec-skill.md`

### Phase 4: Technical Implementation
- Build concrete tested solution
- For code labs: source code (PHP, JS, Blade, SQL)
- For design labs: mockups and UI components
- For architecture labs: matrices, skill specifications, configurations
- Store in `4.realisation/`

### Phase 5: Technical Report
- Explain theory and chosen solution (ADR - Architecture Decision Record)
- Document practical steps
- Write `5.rapport-et-presentation/Lab-[Subject].md`

### Phase 6: Presentation & Sprint
- Create slides with complete cover page
- Write **exactly 3 simple sentences in A1-level French** as speaker notes per slide
- Prepare 5-minute live demo
- File: `5.rapport-et-presentation/Presentation-[Subject].md`

## File Organization Standards

```
project-name/
├── README.md                    # General lab information
├── Todo.md                      # Task tracking checklist
├── 1.besoin/                    # Need & context analysis
├── 2.veille/                    # Technology watch
├── 3.skill-technique/           # AI skill specification
├── 4.realisation/               # Technical implementation
├── 5.rapport-et-presentation/   # Report & slides for instructor
├── .agent/skills/               # AI competencies
│   ├── plugin-dev/              # Meta-governance
│   ├── lab-dev/                 # Meta-methodology
│   └── lab-[name]/              # Dedicated technical skill
└── docs/                        # Team methodological guides
```

## Stack-Specific Skills Mapping

| Technical Component | Problem Solved | Recommended Skill |
|---------------------|----------------|-------------------|
| Lab Governance | Frame 6-step workflow, validate deliverables | `lab-dev` |
| Skill Design | Create skills conforming to Anthropic standards | `plugin-dev` |
| IA Architecture | Determine AI competencies from stack & workflow | `lab-skill-engineering` |
| Laravel Backend | Generate migrations, models, controllers, validation | `lab-crud-laravel` |
| Alpine.js Frontend | Manage reactive interactions, modals, dynamic forms | `lab-alpinejs` |
| Preline UI Components | Integrate accessible Tailwind UI components | `lab-preline-ui` |

## Decision Criteria for Creating New Skills

Create a new technical skill if and only if:

1. **Clear Scope:** The technology has its own engineering rules (e.g., Blade syntax vs Alpine.js)
2. **Reusability:** The component will be used multiple times in the prototype
3. **Autonomy:** The student can test and validate this component independently
4. **Rule Volume:** At least 3-5 specific technical rules to prevent errors

## Code Generation Guidelines

### Backend (Laravel)
- Use Eloquent ORM, never raw queries
- FormRequests for validation
- Resource Controllers for RESTful APIs
- Migrations with proper foreign keys and indexes
- Follow PSR-4 autoloading

### Frontend (Alpine.js)
- Use CDN with defer, pinned to major version
- Alpine handles UI state only, business logic stays in backend
- Use `x-data`, `x-show`, `x-on`, `$dispatch` directives
- No jQuery, no React, no Vue unless explicitly requested

### UI (Tailwind + Preline)
- Compiled CSS file (Tailwind CLI), never CDN in production
- CDN allowed only for ui-kit previews
- Use Preline UI components for consistency
- Ensure responsive and accessible design

### Database
- MySQL/MariaDB by default
- SQLite for tests
- Proper normalization and relational modeling
- Named foreign keys and indexes

## Quality Standards

### Definition of Done
- ✅ Code runs successfully
- ✅ Relevant tests exist and were executed
- ✅ Contract respected (API documented)
- ✅ Accessibility and responsive checks done (UI work)
- ✅ Files documented: manifest, README, or spec updated

### Security
- Validate all input server-side
- Escape output (Blade `{{ }}`, Alpine `x-text`)
- Never commit secrets (.env files)
- Auth, CSRF/CORS, rate limiting implemented
- HTTPS in production

### Clean Code
- Small, named, single-purpose functions/methods
- DRY: pattern repeated 3 times becomes reusable component
- Names describe intent
- Comments explain "why" not "what"
- No dead code, no leftover debug statements

## Language Conventions

- **Code & Comments:** English, simple and direct
- **Technical Terms:** Never translate (Flexbox, Grid, Responsive, middleware, endpoint, ViewModel)
- **User-facing Content:** Follow project language defined in `analyse-besoin`
- **Presentations:** Speaker notes in A1-level French (3 sentences per slide)

## Windows Environment Notes

- Use PowerShell-compatible commands
- Forward slashes in project files
- Avoid Linux-only tooling in instructions

## Transparency Requirements

Every interaction must start with context:
> **Agent Context**: **Role**: [role] | **Scope**: [web/backend/mobile/library] | **Workflow**: [current workflow] | **Phase**: [n or none]

## Checkpoint Law

No phase may start without an explicit "GO" from the user after the previous phase's checkpoint. Silence or vague "ok" is not a GO - ask again for confirmation.

## Architectural Decision Record (ADR) Standard

When choosing between architectural options, document:
- **Context:** What problem needs solving
- **Options Considered:** 2-3 alternatives with pros/cons
- **Decision:** Which option chosen and why
- **Consequences:** Trade-offs accepted
- **Validation:** How the decision was tested/verified
