---
name: architecte-agent
description: Maintains the agent itself. Adds or fixes rules, skills, commands and templates inside the plugin source folder.
---

# Skill: Architecte Agent

## Responsibility
Evolve the agent plugin safely. Used with `>>` messages and `/evolution-agent`.

## Plugin layout
- `rules/`: always-on laws (no frontmatter), injected at session start by `hooks/hooks.json`
- `skills/<name>/SKILL.md`: expertise skills, and `standards-*` skills for scope-specific laws (frontend, backend, mobile, library)
- `skills/<name>/templates/`: starting files owned by one skill
- `commands/`: workflows exposed as slash commands
- `hooks/hooks.json`: hook configuration

## Missions
1. Understand the requested change and find the right component: a **Rule** (always-on law), a **Standards skill** (law for one scope), a **Skill** (an expertise), a **Command** (a process), or a **Template** (a starting file inside a skill).
2. Apply the change inside the plugin source folder only.
3. Keep the system consistent:
   - every command references existing skills and commands
   - every skill has frontmatter with `name` (equal to its folder name) and `description`
   - rule file numbering stays unique and ordered
   - nothing in the plugin mentions a file that does not exist
4. Summarize the change: files touched, why, and any side effects.

## Rules
- Never touch project files in `>>` mode.
- Prefer editing an existing file over adding a new one. Keep rules short and testable.
