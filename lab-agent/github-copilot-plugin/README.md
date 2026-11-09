# Lab Skills Engineering - GitHub Copilot Plugin

A comprehensive GitHub Copilot workspace configuration for full-stack academic prototype development with Laravel, Alpine.js, and Preline UI.

## Quick Start

### 1. Installation

Copy the `.github` folder to your project root:

```powershell
# Copy to your project
cp -r github-copilot-plugin/.github your-project/
```

### 2. Verify Installation

Your project should have:
```
your-project/
└── .github/
    └── copilot-instructions.md
```

### 3. Activate in GitHub Copilot

The instructions will automatically be loaded by GitHub Copilot when you open the workspace in:
- VS Code with GitHub Copilot extension
- JetBrains IDEs with GitHub Copilot plugin
- Any editor with GitHub Copilot support

## What This Plugin Provides

### 🎯 Structured 6-Phase Lab Methodology

1. **Need Analysis** - Frame the technical problem
2. **Technology Watch** - Research existing solutions
3. **Skill Specification** - Define AI assistance rules
4. **Implementation** - Build tested solution
5. **Technical Report** - Document theory and practice
6. **Presentation** - Prepare instructor demo with A1 French notes

### 🏗️ 3-Tier Skill Architecture

- **Meta-Governance** - Skill design and validation standards
- **Meta-Methodology** - Workflow guidance and deliverable validation
- **Technical Skills** - Stack-specific competencies (Laravel, Alpine.js, Preline UI)

### 📐 Granularity Rules

Optimal skill sizing: **One skill per lab subject**
- Avoids monolithic mega-prompts that saturate context
- Prevents micro-fragmentation that creates conflicts
- Maintains focused, reusable competencies

### 🛠️ Technology Stack Support

| Layer | Stack |
|-------|-------|
| Backend | Laravel 11, PHP 8.2+, Eloquent ORM |
| Frontend | Alpine.js, Tailwind CSS, Preline UI |
| Database | MySQL/MariaDB, SQLite (tests) |
| Platform | Windows, PowerShell |

## Skills Included

### Core Skills

1. **`lab-dev`** - Meta-Methodology
   - Guides 6-step workflow
   - Validates deliverables for instructor sprint
   - Enforces checkpoint law

2. **`plugin-dev`** - Meta-Governance
   - Creates skills following Anthropic's 10 rubrics
   - Maintains SSOT (Single Source of Truth)
   - Validates skill conformity

3. **`lab-skill-engineering`** - IA Architecture (Current Lab)
   - Analyzes stack and workflow
   - Determines AI competency mapping
   - Produces skill specification matrices

### Future Technical Skills

Designed for upcoming labs:

- **`lab-crud-laravel`** - Backend development with Eloquent, migrations, controllers
- **`lab-alpinejs`** - Reactive frontend with Alpine.js directives
- **`lab-preline-ui`** - Accessible Tailwind component integration

## Usage Examples

### Starting a New Lab

```markdown
I need to start a new lab on Laravel CRUD operations.

Expected behavior:
- Copilot will follow the 6-phase methodology
- Create proper file structure (1.besoin/, 2.veille/, etc.)
- Guide through Need Analysis first
- Request explicit "GO" before each phase
```

### Implementing a Feature

```markdown
Create a Laravel controller for managing tasks with:
- CRUD operations
- FormRequest validation
- RESTful routes

Expected behavior:
- Uses Eloquent ORM (no raw queries)
- Implements proper validation
- Follows PSR-4 standards
- Includes proper security (CSRF, input validation)
```

### Building UI Components

```markdown
Create an Alpine.js modal component with form submission.

Expected behavior:
- Uses Alpine.js CDN with defer
- Implements x-data, x-show, x-on directives
- No jQuery or framework dependencies
- Integrates with Preline UI styles
```

## File Organization Standard

Every lab follows this structure:

```
lab-name/
├── README.md
├── Todo.md
├── 1.besoin/
│   └── contexte-et-besoin.md
├── 2.veille/
│   └── veille-technologique.md
├── 3.skill-technique/
│   └── spec-skill.md
├── 4.realisation/
│   └── [implementation files]
└── 5.rapport-et-presentation/
    ├── Lab-[Subject].md
    └── Presentation-[Subject].md
```

## Quality Standards

### Definition of Done Checklist

- [ ] Code runs successfully
- [ ] Tests exist and pass
- [ ] API contract documented (if applicable)
- [ ] UI is responsive and accessible (if applicable)
- [ ] Documentation updated (README, manifest, specs)

### Security Requirements

- Server-side input validation
- Proper output escaping
- No committed secrets
- CSRF/CORS protection
- HTTPS in production

### Code Quality

- Small, single-purpose functions
- DRY principle (no duplication)
- Descriptive naming
- Comments explain "why" not "what"
- No dead code or debug statements

## Language Conventions

| Content Type | Language | Notes |
|--------------|----------|-------|
| Code & Comments | English | Simple and direct |
| Technical Terms | English | Never translate (middleware, endpoint, etc.) |
| User-facing UI | Project-specific | Defined in analyse-besoin |
| Presentation Notes | French A1 | Exactly 3 simple sentences per slide |

## Architectural Patterns

### ADR (Architecture Decision Record)

When making technical choices, document:
1. **Context** - Problem to solve
2. **Options** - 2-3 alternatives with pros/cons
3. **Decision** - Chosen option and rationale
4. **Consequences** - Accepted trade-offs
5. **Validation** - Testing/verification method

### SSOT & DRY Principles

- Permanent rules → `.agent/rules/`
- Skill-specific resources → `<skill>/resources/`
- Never duplicate instructions
- Reference existing rules instead of rewriting

## Checkpoint Law

**IMPORTANT:** Each phase requires explicit user confirmation before proceeding.

❌ NOT a GO: "ok", "sure", silence  
✅ Valid GO: "GO", "proceed to next phase", "start phase 2"

## Contributing to Skills

### Creating a New Skill

1. Use `plugin-dev` patterns
2. Follow 10-rubric structure:
   - Mission
   - Triggering & Limits
   - Inputs & Resources
   - Constraints & Rules
   - Step-by-Step Procedure
   - Ambiguity Handling
   - Output Format
   - Quality Control
   - Error Management
   - Concrete Examples

3. Validate with Anthropic standards
4. Test on real lab scenario

### Skill Granularity Decision

Create a new skill if:
- ✅ Clear scope with specific engineering rules
- ✅ Reusable across multiple prototype features
- ✅ Can be tested/validated independently
- ✅ Has 3-5+ specific technical rules

Don't create a skill if:
- ❌ Only 1-2 lines of instruction
- ❌ Used once in entire project
- ❌ Can be a resource in parent skill

## Windows Environment

This plugin is optimized for Windows development:
- PowerShell-compatible commands
- Forward slashes in project files
- Considers Windows-specific tooling

## Transparency Mode

All Copilot responses should start with context:
```
Agent Context: Role: [role] | Scope: [scope] | Workflow: [workflow] | Phase: [n or none]
```

## Version History

- **v1.0.0** (2026-11-05) - Initial GitHub Copilot plugin conversion from lab-skills-v2
  - 3-tier skill architecture
  - 6-phase methodology
  - Stack: Laravel 11 + Alpine.js + Preline UI
  - Skills: lab-dev, plugin-dev, lab-skill-engineering

## Source

Converted from **lab-skills-v2** - Lab Skill Engineering project following Anthropic's official skill patterns and agentskills.io specifications.

## License

Educational use for academic prototype development.

## Support

For issues or questions about this plugin:
1. Check the `.github/copilot-instructions.md` for detailed guidance
2. Review the 6-phase methodology in the instructions
3. Consult skill-specific documentation in original `.agent/skills/` folders

---

**Ready to start your lab?** Just open your project with this plugin installed and ask GitHub Copilot to guide you through the 6-phase methodology!
