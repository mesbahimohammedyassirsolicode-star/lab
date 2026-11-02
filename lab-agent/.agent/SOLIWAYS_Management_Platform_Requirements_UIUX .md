# SOLIWAYS Management Platform
## Complete Requirements & UI/UX Specification

**Document status:** Planning draft for review  
**Scope:** Requirements, permissions, workflows, and UI/UX planning  
**Implementation status:** Planning only — no code written, and no repository or infrastructure created.  
**Version:** 1.0  
**Last updated:** 27 October 2026

---

## 1. Project vision

SOLIWAYS Management Platform is an internal team-management workspace intended to help the SOLIWAYS team coordinate committees, projects, tasks, events, communication, files, meetings, issues, and reporting in one place.

### Objectives
- Centralize task assignment, deadlines, progress, and completion review.
- Improve coordination between committees working on shared projects.
- Make blocked work and support requests visible to the right people.
- Organize project documents and preserve file version history.
- Provide role-appropriate dashboards, reporting, and notifications.
- Keep access permissions clear and protect sensitive administrative actions.

### Evidence informing the planning
Initial leader-survey responses pointed to scattered communication, task/deadline tracking, engagement and accountability, file organization, and cross-committee coordination as areas to improve. The available responses were limited, so treat them as initial signals rather than conclusions about every team member.

---

## 2. Team structure

The team has approximately 30 members and five committees:
1. Social Media
2. Communication
3. Organisation
4. Video Editing & Photography
5. Design

Each committee has a Committee Leader, a Committee Deputy, and members.

### Overall leadership and support
- Team Leader
- Two Deputy Leaders
- Consultant

The Consultant is an experienced former event organizer who mentors and supports Committee Leaders when they encounter difficulties. The Consultant is an advisor, not an administrative superior or approver.

### Committee membership rules
- A member may belong to one committee.
- A member may belong to two committees only if one is Social Media.
- Maximum membership: two committees per member.
- The interface must validate these rules when assigning or changing membership.

---

## 3. Roles and permission principles

Access must be role-based and limited to the relevant committee, project, task, or administrative scope. Showing an action in the UI must not itself grant permission; authorization must be enforced by the system.

### 3.1 Team Leader
- Broad overview of all committees, projects, tasks, issues, and reports.
- Main landing dashboard with KPIs, alerts, progress, committee summaries, and quick actions.
- Can create official events and projects.
- Can close projects.
- Can create team-wide announcements.
- Can export reports.
- Can create member accounts, deactivate accounts, and perform shared security-settings actions.
- Has administrative access to settings and audit history.

### 3.2 Deputy Leaders
- Broad visibility across committees, projects, tasks, issues, and reports.
- Can create official events and projects, and close projects.
- Can create team-wide announcements.
- Can export reports.
- Can create member accounts, edit member information/membership, deactivate accounts, and reset temporary passwords.
- Share security-settings permissions with the Team Leader.
- Can access administrative audit history.
- Can perform approvals within the agreed leadership scope.

### 3.3 Consultant
- Can view all committees, while sensitive administrative information remains hidden.
- Can view task progress but cannot edit tasks.
- Can view progress and issues summaries.
- Can provide support and recommendations to Committee Leaders and Deputies.
- Is automatically involved in High/Critical issues or when support is requested.
- Is not an approver and does not gain administrative authority through support participation.

### 3.4 Committee Leader
- Scope is their own committee, except for permitted shared-project information.
- Can create tasks, assign/reassign them to committee members, change deadlines, and update task status/progress.
- Can track and update committee issues.
- Can view committee members and workload.
- Can create meetings.
- Can approve deliverables such as designs, videos, and posts.
- Can approve routine task/change requests, unless delegated to the Committee Deputy.
- Cannot add, remove, or move committee membership.
- Cannot create projects or official events.

### 3.5 Committee Deputy
- Can view committee tasks and progress; does not automatically inherit the Leader's task-edit permissions.
- Can view member workload and follow progress.
- Can track/update committee issues and request support.
- Can approve routine items when delegated by the Committee Leader.
- Can confirm task completion when delegated.
- Cannot change committee membership.
- Exact cross-committee visibility boundaries remain to be finalized.

### 3.6 Member
- Can view only tasks assigned to them.
- Can update assigned task status, comment, and upload deliverables/files within assigned tasks.
- Can request task closure; the Committee Leader or delegated Committee Deputy confirms it.
- Can report an issue or blockage and request support.
- Can access permitted team announcements, committee communication, relevant project channels, and direct messages within the allowed scope.
- Can access files permitted by committee/project/task access rules.
- Dashboard includes deadlines, calendar, and notifications; a personal-progress widget was not selected.

---

## 4. Account lifecycle and authentication

- No public sign-up.
- Accounts are manually created by the Team Leader or either Deputy Leader.
- Account creation uses the member's supplied email address.
- Login uses email and a temporary password.
- The member must change the temporary password on first login.
- Avoid predictable permanent passwords.
- Team Leader and Deputy Leaders may deactivate accounts.
- Deactivation is the default over permanent deletion.
- Permanent account deletion must use a separate restricted administrative process; the exact authorized role and confirmation process remain open.
- Security-sensitive actions should be logged, including actor and timestamp.
- Session review/sign-out controls are planned for Settings.

---

## 5. Global UI/UX direction

- Modern SaaS style: clean, professional, and comfortable.
- Support both light and dark themes.
- Final custom SOLIWAYS color palette is still open.
- Use a balanced layout with clear information hierarchy.
- Responsive layouts should keep key actions and status information accessible.
- Role-based navigation and content visibility must be consistent throughout the platform.

### Global application shell
- Header: SOLIWAYS identity, search, notifications, and profile.
- Collapsible sidebar in this order:
  1. Dashboard
  2. Committees
  3. Projects & Events
  4. Tasks
  5. Communication
  6. Issues & Support
  7. Reports & Analytics
  8. Calendar
  9. Files
  10. Members
  11. Settings

### Interaction conventions
- KPI clicks open the relevant page with the corresponding filter applied.
- Dashboard alerts open the relevant detailed page.
- Committee cards open a side panel summary with a link to the full committee page.
- Destructive or security-sensitive actions require appropriate authorization and should be auditable.
- Archive is not equivalent to permanent deletion.

---

## 6. Dashboard

### Layout
1. Header and navigation
2. KPI summary cards
3. Quick actions
4. Alerts near the top, directly below KPIs
5. Team progress chart and task list
6. Committee cards and neutral comparison table

### KPIs
- Total Team Members
- Tasks Completed This Week
- Overdue Tasks
- Open Issues

### Default reporting period
- Current Week, with a period selector for the progress chart.

### Alerts
- Overdue tasks
- Blocked issues
- Pending approvals/decisions
- Members/tasks with no progress update

A missing progress update is a follow-up signal, not a judgment of an individual.

### Committee overview
- Cards plus a detailed comparison table.
- Neutral comparison only; no ranking.
- Card click opens a side panel summary and link to the full committee page.

### Quick actions
- Create Task
- Add Member
- View Issues
- Create Announcement
- View Approvals
- Create Project

Quick actions are shown only to roles with permission.

---

## 7. Committees Page

### Overview
- Committee cards plus a searchable comparison table.

### Committee detail sections
- Leadership
- Members
- Tasks
- Workload
- Issues
- Projects

### Member click
- Opens a member profile showing only permitted information and workload.

### Committee Leader actions
- Assign Task
- Update Task / Progress
- Manage Issues

All actions remain subject to role permissions.

---

## 8. Projects & Events Page

### Overview
- Cards plus searchable table.
- Filters: status, committee, date.
- Clicking a project opens a full detail page.

### Project details
- Overview
- Committees involved
- Tasks and progress
- Timeline and deadlines
- Issues and blocked tasks
- Approvals and decisions
- Files and deliverables

### Project statuses
- Planned
- Active
- Blocked
- Completed

Do not add an unapproved status without review.

### Events
- Separate tabs: Projects | Events.
- Event cards show dates, location, status, and committees involved.
- Quick actions: Create Project and Create Official Event.
- Only Team Leader and Deputy Leaders may create projects or official events.
- Team Leader or any Deputy Leader may close a project.
- Event Plan approvals are by Team Leader or any Deputy Leader.
- Project closure and approval actions must be logged.
- Project/event deletion defaults to archive/cancel; permanent deletion is restricted.

---

## 9. Tasks Page

### Main view
- Toggle between Table and Kanban.
- Default grouping: status.

### Task information
- Description
- Assignee(s)
- Committee
- Deadline (required)
- Priority: Low, Medium, High, Urgent
- Status/progress
- Optional dependencies
- Deliverables/attached files

### Filters
- Status
- Priority
- Deadline
- Committee

### Visibility
- Members see only their assigned tasks.
- Committee Leaders can manage tasks within their committee.
- Committee Deputies can view tasks and progress, with editing/approval only when specifically delegated as agreed.
- Consultant can view task progress but cannot edit tasks.

### Task workflow
- Member updates status and may request closure.
- Committee Leader or delegated Committee Deputy confirms closure.
- Blocked task must be marked Blocked, explained, and linked to an Issue.
- Every task has a deadline.
- Overdue notifications are immediate; later escalation is priority-based, with Urgent tasks escalating faster. Exact timing is to be configured later.
- Dependencies are optional.
- Approval history should record who approved, what was approved, and when.

### Committee Leader actions
- Create task
- Assign/reassign
- Change deadline
- Update status/progress
- Review completion and confirm closure

### Overdue UI
- Alert banner plus indicators on individual overdue tasks.

---

## 10. Communication Page

### Layout and channels
- Chat layout with a sidebar.
- Channels: Team, Committee, Project, Direct Messages.
- Channel and direct-message access follows the user's permitted scope.

### Messaging features
- Replies/threaded discussions
- File attachments and links
- Message search
- Pinned messages
- Unread indicators

### Announcements
- Dedicated Announcements section.
- Only Team Leader and Deputy Leaders can publish team-wide announcements.

### Direct messages
- Members may message other members within the permitted communication scope.

### Notifications
In-app notifications only; no email or push notifications in the current scope.
- Task assigned
- Deadline/overdue
- Blocked task or issue
- Approval approved/rejected
- New team announcement
- Daily summary digest

Comments/mentions notifications were not selected and should not be assumed.

### History and Consultant access
- Full accessible history, subject to permissions.
- Consultant can communicate directly with Committee Leaders/Deputies and use relevant project channels.

---

## 11. Issues & Support Page

### Overview
- Toggle between Table and status board.
- Opening an issue displays a full detail page.

### Issue fields
- Description
- Severity: Low, Medium, High, Critical
- Reporter
- Responsible committee
- Follow-up owner
- Status
- Date created
- Last updated

### Filters
- Status
- Severity
- Committee
- Date

### Workflow
- Any member can report an issue/blockage and request help.
- The responsible Committee Leader owns follow-up; Committee Deputies may track/update issues and request support within their scope.
- Support request is linked directly to the issue.
- The assignee marks the issue Resolved.
- The reporter may confirm resolution.
- Consultant involvement is automatic for High/Critical issues or when support is requested.
- Consultant provides recommendations, not approvals.
- Existing severity levels and ownership rules must be preserved.

---

## 12. Calendar & Meetings Page

**Status: UI/UX details still need explicit confirmation.** Previously agreed functional requirements remain in force:
- Shared calendar shows events, meetings, and deadlines the user is permitted to see.
- Meeting creation is available to Team Leader, Deputy Leaders, and Committee Leaders.
- Attendance is recorded for every meeting.
- In-app reminders are sent 24 hours and 1 hour before a meeting.
- Overlapping meetings/deadlines produce a warning but do not block scheduling.
- Official event creation is restricted to Team Leader and Deputy Leaders.

A draft UI form was proposed with month/week/agenda views, calendar filters, meeting details, and attendance controls, but the user replied “ok” to continue planning rather than explicitly confirming the individual settings. Do not treat the detailed draft selections as finalized until confirmed.

---

## 13. Files & Documents Page

### Overview and organization
- Grid + List toggle.
- Organize by Project first, then Committee, with optional Task association.

### Filters
- File type
- Committee
- Project
- Upload date

### File information
- Name
- Type
- Uploader
- Upload date
- Current version
- Linked task/project

### File types and preview
- Supported images and documents can be previewed.
- Other formats can be opened or downloaded where supported.
- Supported types include images, videos, documents, design files, and external links.

### Upload and permissions
- Upload mainly from assigned task details.
- Access follows project, committee, and task permissions.

### Version history
- Visible version history.
- Authorized users can restore previous versions.

### Archive and deletion
- Archive by default.
- Permanent deletion restricted; exact file-deletion permissions remain open.
- Archive is not permanent deletion.

---

## 14. Members Page

### Overview
- Cards + searchable table toggle.
- List fields: name, email, role, committee, account status, workload.
- Filters: committee, role, status.

### Member profile
- Permitted contact/account information
- Committee membership and role
- Tasks visible to the current user
- Workload summary
- Progress history/updates

### Account management
- Account creation by Team Leader and Deputy Leaders only.
- Management actions: edit information, change committee membership, deactivate account, reset temporary password.
- Permanent deletion uses a separate restricted administrative process.
- Membership validation enforces maximum two committees, with Social Media required when there are two.

### Workload
- Summary with expandable detailed workload.
- No member ranking or leaderboard.

---

## 15. Reports & Analytics Page

### Overview
- KPI cards + charts + detailed tables.
- Default period: Current Week.

### Report sections
- Tasks
- Projects
- Committees
- Issues
- Deadlines

Attendance reporting is excluded.

### Charts
- Task status distribution
- Weekly progress
- Workload by committee

### Comparison and individual metrics
- Neutral committee comparison without ranking.
- Individual metrics: workload and progress only.
- No member leaderboard.

### Exports and access
- Export formats: PDF and CSV.
- Export permission: Team Leader and Deputy Leaders only.
- Consultant: progress/issues summaries.
- Members: no comprehensive report access by default.

---

## 16. Settings Page

### Layout and categories
- Categorized settings.
- Categories: Profile, Security, Notifications, Workflow, Appearance, Audit.

### Security
- Team Leader and both Deputy Leaders share security-settings permissions.
- Password change and session review/sign-out controls.
- Force password change on first login.

### Notifications
- Manage in-app notification preferences.
- No email/push notifications in the current scope.

### Workflow
- Configurable overdue escalation by priority.
- Urgent tasks escalate faster.
- Exact escalation timings remain to be defined.

### Appearance
- Light and dark themes, with user preference.
- Final SOLIWAYS color palette remains open.

### Audit
- Administrative audit history visible to Team Leader and Deputy Leaders.
- Sensitive actions should record actor, action, and timestamp.

---

## 17. Cross-cutting workflows and controls

### Approvals
- Deliverables: Committee Leader.
- Routine task/change approvals: Committee Leader or delegated Committee Deputy.
- Event Plan: Team Leader or any Deputy Leader.
- Major/sensitive decisions: Team Leader or any Deputy Leader under agreed permissions.
- Approval records include who approved, what was approved, and when.

### Project and event lifecycle
- Projects are created only by Team Leader and Deputy Leaders.
- Projects can include multiple committees, with each committee owning its tasks.
- Project closure by Team Leader or any Deputy Leader.
- Archive/cancel by default for project/event removal; permanent deletion restricted.

### Notification and escalation
- In-app only.
- Task assignment, deadline, blockage, approval/rejection, announcement, and daily summary.
- Overdue escalation is priority-based; exact timings later in Settings.

### Security and privacy principles
- Enforce permissions on the server/system layer, not just by hiding UI controls.
- Log sensitive administrative actions.
- Use temporary passwords only with mandatory first-login change.
- Keep Consultant support-only and non-approving.
- Do not rank members or committees.

---

## 18. Open decisions before development

These are the remaining items to resolve before implementation:

1. **Permanent file deletion:** Confirm the final confirmation flow and recovery safeguards. Current decision: Team Leader and Deputy Leaders may permanently delete files, with extra confirmation.
2. **Permanent account deletion:** Confirm safeguards and confirmation flow. Current decision: Team Leader only may permanently delete accounts, with extra confirmation and an audit record; Team Leader and Deputy Leaders may deactivate accounts.
3. **Committee Deputy visibility:** Finalize cross-committee visibility for shared project information. Current direction: committee-scoped access, with permitted shared-project information.
4. **Overdue escalation timings:** Confirm notification/escalation intervals by priority. Confirmed rule: a task becomes Overdue immediately after its deadline passes if it is not completed.
5. **Detailed permission matrix:** Validate edge cases and ensure every action has a clear authorized role.
6. **Retention and recovery:** Define archive retention, backup/restore policy, and file/version retention.
7. **Project/event status edge cases:** Confirm how cancellation is represented, since Cancelled was not selected as a project status.
8. **Operational configuration:** Confirm storage limits, backup schedule, and production environment settings before launch.

---

## 19. Approved technical architecture

The following stack has been selected for planning. **This approval records the architecture choice only; it is not authorization to start coding or create/deploy infrastructure.**

- **Frontend:** Next.js + TypeScript.
- **Backend and database:** Supabase + PostgreSQL.
- **Hosting/deployment:** Vercel.
- **Source repository:** Create a new repository for SOLIWAYS Management Platform.
- **Authentication:** Supabase Auth is the proposed fit; configure administrator-created accounts, temporary-password onboarding, and forced password change at first login. Validate the exact flow before implementation.
- **Authorization:** Enforce role-based access on the server and in PostgreSQL Row Level Security (RLS) policies. UI visibility alone is not a security boundary.
- **File storage:** Supabase Storage is the proposed fit, with private buckets and access rules aligned with committee/project/task permissions.
- **Secrets:** Keep service-role credentials and other secrets server-side; never expose them in browser code.
- **Auditability:** Record sensitive administrative actions with actor, action, timestamp, and relevant target.
- **Backups and recovery:** Finalize the backup schedule, retention, and restore test before production launch.
- **Testing:** Include permission/RLS tests, authentication flows, task deadline and overdue behavior, responsive UI, and end-to-end workflow tests.
- **Environments:** Separate development/staging from production and use environment variables for configuration.

## 20. Proposed development phases

No phase below has started; this is a proposed sequence.

1. Finalize remaining open decisions and approve the requirements.
2. Confirm repository ownership/access and operational limits for Supabase and Vercel.
3. Create the new repository and establish development/staging conventions **only after explicit authorization to begin implementation**.
4. Implement authentication, user management, and permission enforcement.
5. Build committees, projects/events, and tasks.
6. Build calendar, issues/support, and notifications.
7. Build communication and files.
8. Build reports, analytics, and settings.
9. Test permissions, security, responsive UI, and workflows.
10. Deploy staging, conduct user acceptance testing, then production.

### Definition of ready for development
Development should start only after:
- The complete specification is reviewed and approved.
- Open permission and deletion decisions are resolved or explicitly deferred.
- The UI/UX direction and brand choices are approved.
- The architecture and data/security plan are agreed.
- Acceptance criteria and testing scenarios are documented.

---

## 21. Approval checklist

Use this checklist in the requirements review:
- [ ] Team structure and membership rules approved
- [ ] Roles and permission matrix approved
- [x] Page-by-page UI/UX specifications documented
- [x] Calendar & Meetings choices confirmed
- [x] SOLIWAY visual identity reference supplied
- [x] Technical architecture selected for planning: Next.js + TypeScript, Supabase + PostgreSQL, Vercel, new repository
- [ ] Remaining permission and deletion details finalized
- [ ] Backup and recovery policy approved
- [ ] Explicit authorization to begin implementation received

**Current status:** Requirements and UI/UX planning draft updated to version 1.1. No code has been written and no repository or infrastructure has been created. The document is ready for review and iteration; architecture selection is not permission to begin implementation.
