# fullstack-agent (Claude Code plugin)

Converted from the `.agent/` pack (Antigravity format).

## Install (local)
```powershell
claude --plugin-dir ./fullstack-agent
```
or, to keep it installed:
```
/plugin marketplace add ./fullstack-agent
/plugin install fullstack-agent@mym-plugins
```

## Start
```
/fullstack-agent:processus-developpement build me a restaurant website with an admin API
```

## Mapping from `.agent/`
| .agent | Plugin |
| --- | --- |
| rules (always_on) | `rules/` injected by `hooks/hooks.json` at session start |
| rules (glob) | `skills/standards-*` (load by description) |
| skills | `skills/` (unchanged) |
| workflows | `commands/` (slash commands) |
| templates | `skills/<owner>/templates/` |

Prefix modes `>` (discussion only) and `>>` (edit the plugin) still work.
The hook uses `cat`, so on Windows Claude Code needs Git Bash (installed with Git for Windows).
