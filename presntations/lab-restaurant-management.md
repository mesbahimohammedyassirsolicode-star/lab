---
marp: true
theme: default
paginate: true
size: 16:9
title: Restaurant Management System — Technical Lab
description: A source-grounded Laravel lab plan for a restaurant management system
style: |
  section {
    background: #f8fafc;
    color: #172554;
    font-family: "Aptos", "Segoe UI", sans-serif;
    padding: 54px 72px;
  }
  section.lead {
    background: linear-gradient(135deg, #0f172a 0%, #1d4ed8 58%, #38bdf8 100%);
    color: white;
  }
  section.light {
    background: #eff6ff;
    color: #172554;
  }
  h1 { color: #0f3b8f; font-size: 48px; }
  .lead h1 { color: white; font-size: 62px; }
  h2 { color: #1d4ed8; font-size: 32px; }
  p, li { font-size: 22px; line-height: 1.35; }
  code { font-size: 0.82em; }
  pre { font-size: 16px; }
  strong { color: #1d4ed8; }
  .lead strong { color: #bae6fd; }
---

<!-- _class: lead -->

# Restaurant Management System

---

<!-- _class: light -->

## Lab Plan
1. Introduction
2. Problems Encountered
3. Solutions Implemented

---

## Introduction

**Goal:** develop a web application to manage restaurant menu items and orders.

- **Evidence boundary:** the repository contains Laravel starter applications; no restaurant features or requirements are documented.
- **Stack evidenced in the Laravel project:** PHP `^8.3`, Laravel `^13.17`, and SQLite configured in `.env.example`.
- **Persistence:** the provided starter migration creates user, password-reset-token, and session tables—not restaurant data.
- **Lab scope (proposed):** add a menu-item data model and migration, then verify it with Laravel's migration tooling.
- **Not evidenced:** Alpine.js, deployment infrastructure, restaurant workflows, and production incidents.

---

## Problems Encountered

- **No restaurant implementation to validate:** the available Laravel route returns the `welcome` view; no restaurant-specific routes or models were found in the inspected starter app.
- **Requirements are unspecified:** menu fields, order lifecycle, staff roles, and table/reservation workflows need product decisions before implementation.
- **No restaurant defect is documented:** do not treat missing features or unknown requirements as a confirmed runtime bug.
- **Verification evidence is limited:** the existing feature test checks that `/` returns HTTP 200. It does not test restaurant behavior, and it was not run for this lab.

---

## Solutions Implemented

- **Implemented for this lab:** no restaurant code changes are documented; the code below is a proposed hands-on exercise, not an existing fix.
- **First implementation step:** agree on menu-item fields and validation rules, then create the database migration.
- **Verification:** run `php artisan migrate` and inspect the generated schema; run `php artisan test` for the existing starter smoke test.
- **Status:** restaurant features and their tests remain **not implemented / not verified**. Do not claim the starter smoke test validates restaurant functionality.

---

## Practical Exercise: Create a Menu Items Table

Create a migration:

```bash
php artisan make:migration create_menu_items_table
```

Add this schema to the generated migration's `up()` method:

```php
Schema::create('menu_items', function (Blueprint $table): void {
    $table->id();
    $table->string('name', 120);
    $table->text('description')->nullable();
    $table->unsignedInteger('price_cents');
    $table->boolean('is_available')->default(true);
    $table->timestamps();
});
```

Then apply and verify the migration:

```bash
php artisan migrate
php artisan test
```

**Design note:** store prices as integer cents to avoid floating-point rounding. This exercise adds menu data only; ordering, payment, and deployment are out of scope.
