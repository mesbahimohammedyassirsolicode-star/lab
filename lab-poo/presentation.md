---
marp: true
theme: default
paginate: true
size: 16:9
---

# lab-poo
## Deepening Object-Oriented Programming in PHP

**Student:** [Name]  
**Supervisor:** [Name]  
**Course / group:** [To be completed]

---

# Presentation Plan

1. Introduction and technical stack
2. Abstract class
3. Interface
4. Inheritance
5. Polymorphism
6. Encapsulation
7. Static methods and properties
8. Student problem and proposed solution
9. Quick Start and demonstrations

---

# Introduction & Technical Stack

This lab explores six object-oriented programming concepts in PHP through small, runnable examples:

- Abstract classes and interfaces
- Inheritance and polymorphism
- Encapsulation
- Static methods and properties

**Stack:** PHP CLI, PHP 8.0 or later  
**Verified environment:** PHP 8.4.25

The examples are standalone demonstrations linked to the restaurant management project, not features integrated into the Laravel application.

---

# Quick Start

From the repository root, enter the lab directory and check PHP:

```bash
cd lab-poo
php -v
```

Run a PHP one-line **Hello World**:

```bash
php -r "echo 'Hello, PHP!', PHP_EOL;"
```

Expected output: `Hello, PHP!`

---

# Definition: Abstract Class

An **abstract class** is a partial model that cannot be instantiated directly.

- It can contain concrete methods and abstract methods.
- Subclasses must implement every abstract method.
- It is used when several classes share code and a common contract.

The example defines an abstract `MenuItem` with a concrete `label()` method and an abstract `category()` method.

---

<!-- _class: light -->

# Example: Abstract Class

```php
abstract class MenuItem
{
    public function __construct(
        protected string $name,
        protected int $priceCents
    ) {
    }

    abstract public function category(): string;
}

class Dish extends MenuItem
{
    public function category(): string
    {
        return 'Plat';
    }
}
```

Run the complete example from `lab-poo`:

```bash
php examples/classe-abstraite/example.php
```

Expected output: `[Plat] Tajine poulet - 85,00 EUR`

---

# Definition: Interface

An **interface** declares a contract without providing an implementation.

- A class implements an interface with `implements`.
- The interface lists the methods the class must provide.
- Code can depend on the interface instead of a concrete class.

The example defines `PaymentMethod` and two implementations: `CashPayment` and `CardPayment`.

---

<!-- _class: light -->

# Example: Interface

```php
interface PaymentMethod
{
    public function pay(int $amountCents): string;
}

class CashPayment implements PaymentMethod
{
    public function pay(int $amountCents): string
    {
        return 'Paiement en espèces : '
            . number_format($amountCents / 100, 2, ',', ' ') . ' EUR';
    }
}
```

Run the complete example from `lab-poo`:

```bash
php examples/interface/example.php
```

Expected output: `Paiement en espèces : 25,00 EUR`

---

# Definition: Inheritance

**Inheritance** lets a child class reuse the properties and methods of a parent class.

- The child class uses `extends`.
- It can call `parent::__construct()` and `parent::method()`.
- It can add its own properties and override methods.
- It expresses an "is a" relationship.

The example defines `Order`, then `DineInOrder` and `TakeawayOrder`.

---

<!-- _class: light -->

# Example: Inheritance

```php
class Order
{
    protected array $items = [];

    public function __construct(protected string $reference)
    {
    }

    public function totalCents(): int
    {
        return array_sum(array_column($this->items, 'priceCents'));
    }
}

class DineInOrder extends Order
{
    public function __construct(string $reference, private int $tableNumber)
    {
        parent::__construct($reference);
    }
}
```

Run the complete example from `lab-poo`:

```bash
php examples/heritage/example.php
```

Expected output: `CMD-001 (2 article(s)) : 100,00 EUR - sur place, table 12`

---

# Definition: Polymorphism

**Polymorphism** means the same method call can produce different behavior depending on the object.

- A common parent class or interface defines the method.
- Each subclass provides its own implementation.
- The calling code does not need to know the concrete type.

The example computes order totals differently for dine-in and takeaway orders.

---

<!-- _class: light -->

# Example: Polymorphism

```php
foreach ($orders as $order) {
    echo $order->type() . ' -> total : '
        . number_format($order->totalCents() / 100, 2, ',', ' ')
        . " EUR\n";
}
```

Run the complete example from `lab-poo`:

```bash
php examples/polymorphisme/example.php
```

Expected output:

```text
Sur place (service 10 %) -> total : 110,00 EUR
À emporter (emballage 2,00 EUR) -> total : 97,00 EUR
```

---

# Definition: Encapsulation

**Encapsulation** protects an object's internal state.

- Properties are `private` or `protected`.
- Public methods validate changes and expose only what is needed.
- The object keeps its invariants valid.

The example models a restaurant table whose capacity cannot be exceeded.

---

<!-- _class: light -->

# Example: Encapsulation

```php
class RestaurantTable
{
    private int $reservedSeats = 0;

    public function __construct(
        private int $number,
        private int $seats
    ) {
    }

    public function reserve(int $people): void
    {
        if ($this->reservedSeats + $people > $this->seats) {
            throw new RuntimeException('Pas assez de places disponibles.');
        }

        $this->reservedSeats += $people;
    }
}
```

Run the complete example from `lab-poo`:

```bash
php examples/encapsulation/example.php
```

Expected output: `Réservation refusée : Pas assez de places disponibles.`

---

# Definition: Static Members

**Static methods and properties** belong to the class, not to an instance.

- A static property is shared by all calls.
- A static method is called with `ClassName::method()`.
- Use static members for class-level state or helpers.

The example generates unique order references with a shared sequence.

---

<!-- _class: light -->

# Example: Static Members

```php
class OrderNumber
{
    public const PREFIX = 'CMD';

    private static int $sequence = 0;

    public static function next(): string
    {
        self::$sequence++;

        return sprintf('%s-%04d', self::PREFIX, self::$sequence);
    }
}
```

Run the complete example from `lab-poo`:

```bash
php examples/statique/example.php
```

Expected output: `CMD-0001`, then `CMD-0002`, then `CMD-0003`.

---

# Student Problem

**Concrete problem:** [To be completed by the student]

Describe the real situation that motivates using one or more of these object-oriented concepts.

---

# Proposed Solution & Demonstrations

**Proposed solution:** [To be completed by the student]

The lab's runnable demonstrations are:

```bash
php examples/classe-abstraite/example.php
php examples/interface/example.php
php examples/heritage/example.php
php examples/polymorphisme/example.php
php examples/encapsulation/example.php
php examples/statique/example.php
```

Compare their output with the code and explain how the chosen concept addresses the stated problem.
