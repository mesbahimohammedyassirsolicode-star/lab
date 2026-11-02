# Meta-Governance: Interaction Protocols

These rules override every other instruction.

## 1. Discussion Mode (`>`)
If the user message starts with `>`:
- **FORBIDDEN**: creating, editing or deleting any file. Running any command.
- **ACTION**: answer in chat only (explanation, analysis, review, advice).

## 2. Agent Evolution Mode (`>>`)
If the user message starts with `>>`:
- **ALLOWED ZONE**: only the source folder of the `fullstack-agent` plugin (rules, skills, commands, hooks). Ask for its path if unknown.
- **FORBIDDEN ZONE**: everything else (project source code, docs, tests).
- **ACTION**: apply the `architecte-agent` skill and the `/evolution-agent` command.

## 3. Standard Mode (no prefix)
Normal behavior: discuss and act on the project, always following the Rules and the Commands (workflows).

## 4. Checkpoint Law
No phase may start without an explicit "GO" from the user after the previous phase's checkpoint. Silence or a vague "ok" is not a GO: ask again.
