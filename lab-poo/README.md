# lab-poo

## Objectives

This lab explores six object-oriented programming concepts in PHP through small, runnable examples:

- **Abstract class:** define a model that cannot be instantiated directly.
- **Interface:** declare a contract that classes must implement.
- **Inheritance:** reuse the properties and methods of a parent class.
- **Polymorphism:** call the same method on different objects and get different behavior.
- **Encapsulation:** protect an object's data behind controlled methods.
- **Static methods and properties:** attach state and behavior to the class itself.

Each example is a standalone teaching demonstration linked to the restaurant management project (menu items, orders, payments, and tables). The examples are not integrated into the Laravel application.

## Quick Start

Requirements: PHP 8.0 or later. The examples were checked with PHP 8.4.25.

From the repository root:

```bash
cd lab-poo
php -v
php -r "echo 'Hello, PHP!', PHP_EOL;"
```

Run each example from the `lab-poo` directory:

```bash
php examples/classe-abstraite/example.php
php examples/interface/example.php
php examples/heritage/example.php
php examples/polymorphisme/example.php
php examples/encapsulation/example.php
php examples/statique/example.php
```

Each example folder contains a `README.md` explaining the concept, the expected output, and its link to the restaurant project.

## Structure

| Concept | Example | Tutorial |
| --- | --- | --- |
| Abstract class | `examples/classe-abstraite/example.php` | `examples/classe-abstraite/README.md` |
| Interface | `examples/interface/example.php` | `examples/interface/README.md` |
| Inheritance | `examples/heritage/example.php` | `examples/heritage/README.md` |
| Polymorphism | `examples/polymorphisme/example.php` | `examples/polymorphisme/README.md` |
| Encapsulation | `examples/encapsulation/example.php` | `examples/encapsulation/README.md` |
| Static members | `examples/statique/example.php` | `examples/statique/README.md` |

## Presentation

See [presentation.md](./presentation.md) for the English Marp presentation plan.
