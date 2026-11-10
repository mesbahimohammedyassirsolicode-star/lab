---
marp: true
theme: default
paginate: true
size: 16:9
---

# lab-php
## Error Handling, Namespaces, and Traits

**Student:** [Name]  
**Supervisor:** [Name]  
**Course / group:** [To be completed]

---

# Presentation Plan

1. Introduction and technical stack
2. Error and exception handling
3. Namespaces
4. Traits
5. Student problem and proposed solution
6. Quick Start and demonstrations

---

# Introduction & Technical Stack

This lab introduces three PHP concepts through small, runnable examples:

- Handling exceptional situations
- Organizing classes with namespaces
- Reusing methods with traits

**Stack:** PHP CLI, PHP 8.0 or later  
**Verified environment:** PHP 8.5.12

The examples are standalone demonstrations, not features integrated into an application.

---

# Quick Start

From the repository root, enter the lab directory and check PHP:

```bash
cd lab-php
php -v
```

Run a PHP one-line **Hello World**:

```bash
php -r "echo 'Hello, PHP!', PHP_EOL;"
```

Expected output: `Hello, PHP!`

---

# Definition: Errors and Exceptions

- An **error** indicates a problem during execution.
- An **exception** represents an exceptional situation that code can throw and handle.
- `try` wraps code that may throw an exception.
- `catch` handles a matching exception.
- `finally` runs whether an exception occurred or not.

The example defines an `AgeInvalideException` and catches invalid ages.

---

<!-- _class: light -->

# Example: Handling an Exception

```php
try {
    verifierAge(-2);
} catch (AgeInvalideException $e) {
    echo "Erreur métier : " . $e->getMessage();
} finally {
    echo "Nettoyage final.";
}
```

Run the complete example from `lab-php`:

```bash
php examples/gestion-erreurs/example.php
```

The custom exception is caught, its message is displayed, and the `finally` block runs.

---

# Definition: Namespace

A **namespace** groups related classes and helps prevent class-name conflicts.

- `App\Models` contains the `User` class.
- `App\Utils` contains the `Formatter` class.
- `use` imports these classes so the main code can refer to them by their short names.

---

<!-- _class: light -->

# Example: Using Namespaces

```php
use App\Models\User;
use App\Utils\Formatter;

$user = new User("Aymane");
echo Formatter::highlight($user->getName());
```

Run the complete example from `lab-php`:

```bash
php examples/namespaces/example.php
```

Expected output includes the formatted name `AYMANE`.

---

# Definition: Trait

A **trait** packages methods that multiple classes can reuse.

- A class includes a trait with `use`.
- The example's `Loggable` trait provides a `log()` method.
- Both `UserService` and `OrderService` use that method.

A trait is a code-reuse mechanism, not a standalone class or a substitute for every use of inheritance.

---

<!-- _class: light -->

# Example: Reusing a Trait

```php
trait Loggable
{
    public function log(string $message): void
    {
        echo "[LOG] " . $message . "\n";
    }
}

class UserService
{
    use Loggable;
}
```

Run both class demonstrations from `lab-php`:

```bash
php examples/traits/example.php
```

Both services print a log message using the same trait method.

---

# Student Problem

**Concrete problem:** [To be completed by the student]

Describe the real situation that motivates using one or more of these PHP concepts.

---

# Proposed Solution & Demonstrations

**Proposed solution:** [To be completed by the student]

The lab's runnable demonstrations are:

```bash
php examples/gestion-erreurs/example.php
php examples/namespaces/example.php
php examples/traits/example.php
```

Compare their output with the code and explain how the chosen concept addresses the stated problem.
