---
description: Maintenance command. Modify the agent plugin itself (triggered by >> messages).
---

# Workflow: Evolution Agent

## Trigger
Any message starting with `>>`.

## Steps
1. Get the plugin source folder path if it is not known. Never edit the installed cache copy.
2. **Skill**: `architecte-agent`. Identify the right component: Rule, Standards skill, Skill, Command, or Template.
3. Apply the change inside the plugin source folder only.
4. Run the consistency checks from the skill (references, frontmatter, numbering).
5. Reply with: files changed, why, and side effects.

## Checkpoint
Ask the user to confirm the change, then run `/reload-plugins` before using it in a real project.
