---
marp: true
theme: default
paginate: true
size: 16:9
---

# lab-poo
## La POO en PHP : les notions avancées

**Étudiant :** Mohammed Yassir Mesbahi  
**Encadrant :** ES-SARRAJ Fouad  
**Formation / groupe :** [À compléter]

---

# Plan de la présentation

1. Introduction et stack technique
2. Classe abstraite
3. Interface
4. Héritage
5. Polymorphisme
6. Encapsulation
7. Méthodes et propriétés statiques
8. Problème et solution de l'étudiant
9. Démarrage rapide et démonstrations

---

# Introduction et stack technique

Ce lab présente six notions de la POO en PHP.
Chaque notion a un exemple court. On peut le lancer dans le terminal.

- Les classes abstraites et les interfaces
- L'héritage et le polymorphisme
- L'encapsulation
- Les méthodes et les propriétés statiques

**Stack :** PHP CLI, PHP 8.0 ou plus  
**Environnement testé :** PHP 8.4.25

Les exemples sont des démonstrations seules. Ils sont liés au projet de gestion de restaurants. Ils ne sont pas dans l'application Laravel.

---

# Démarrage rapide

Depuis la racine du dépôt, on entre dans le dossier du lab :

```bash
cd lab-poo
php -v
```

On teste PHP avec une seule ligne. C'est un **Hello World** :

```bash
php -r "echo 'Hello, PHP!', PHP_EOL;"
```

Résultat attendu : `Hello, PHP!`

---

# Définition : la classe abstraite

Une **classe abstraite** est un modèle partiel. On ne peut pas créer un objet avec elle.

- Elle peut avoir des méthodes normales et des méthodes abstraites.
- Chaque sous-classe doit écrire les méthodes abstraites.
- Elle sert quand plusieurs classes ont le même code et le même contrat.

Dans l'exemple, `MenuItem` est abstraite. Elle a une méthode abstraite `category()`. Elle a aussi la méthode `label()`.

---

<!-- _class: light -->

# Exemple : la classe abstraite

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

On lance l'exemple complet depuis `lab-poo` :

```bash
php examples/classe-abstraite/example.php
```

Résultat attendu : `[Plat] Tajine poulet - 85,00 EUR`

---

# Définition : l'interface

Une **interface** décrit un contrat. Elle ne donne pas le code de la méthode.

- Une classe utilise une interface avec `implements`.
- L'interface liste les méthodes que la classe doit avoir.
- Le code peut utiliser l'interface. Il ne connaît pas la classe exacte.

Dans l'exemple, on a l'interface `PaymentMethod`. Elle a deux classes : `CashPayment` et `CardPayment`.

---

<!-- _class: light -->

# Exemple : l'interface

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

On lance l'exemple complet depuis `lab-poo` :

```bash
php examples/interface/example.php
```

Résultat attendu : `Paiement en espèces : 25,00 EUR`

---

# Définition : l'héritage

**L'héritage** permet à une classe enfant d'utiliser le code de la classe parent.

- La classe enfant utilise `extends`.
- Elle peut appeler `parent::__construct()` et `parent::methode()`.
- Elle peut ajouter ses propriétés et changer une méthode.
- L'héritage veut dire « est un ».

Dans l'exemple, on a la classe `Order`. Ensuite on a `DineInOrder` et `TakeawayOrder`.

---

<!-- _class: light -->

# Exemple : l'héritage

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

On lance l'exemple complet depuis `lab-poo` :

```bash
php examples/heritage/example.php
```

Résultat attendu : `CMD-001 (2 article(s)) : 100,00 EUR - sur place, table 12`

---

# Définition : le polymorphisme

**Le polymorphisme** veut dire que le même appel de méthode donne des résultats différents.
Le résultat dépend de l'objet réel.

- Une classe parent ou une interface définit la méthode.
- Chaque sous-classe écrit sa propre version.
- Le code appelant n'a pas besoin de connaître le type exact.

Dans l'exemple, le total d'une commande n'est pas le même sur place et à emporter.

---

<!-- _class: light -->

# Exemple : le polymorphisme

```php
foreach ($orders as $order) {
    echo $order->type() . ' -> total : '
        . number_format($order->totalCents() / 100, 2, ',', ' ')
        . " EUR\n";
}
```

On lance l'exemple complet depuis `lab-poo` :

```bash
php examples/polymorphisme/example.php
```

Résultat attendu :

```text
Sur place (service 10 %) -> total : 110,00 EUR
À emporter (emballage 2,00 EUR) -> total : 97,00 EUR
```

---

# Définition : l'encapsulation

**L'encapsulation** protège les données de l'objet.

- Les propriétés sont `private` ou `protected`.
- Les méthodes publiques vérifient les changements.
- L'objet reste toujours dans un état correct.

Dans l'exemple, on a une table de restaurant. On ne peut pas dépasser sa capacité.

---

<!-- _class: light -->

# Exemple : l'encapsulation

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

On lance l'exemple complet depuis `lab-poo` :

```bash
php examples/encapsulation/example.php
```

Résultat attendu : `Réservation refusée : Pas assez de places disponibles.`

---

# Définition : le statique

**Les méthodes et les propriétés statiques** appartiennent à la classe. Elles n'appartiennent pas à un objet.

- Une propriété statique est partagée par tous les appels.
- Une méthode statique s'appelle avec `NomDeLaClasse::methode()`.
- Le statique est utile pour un état ou une aide liée à la classe.

Dans l'exemple, on génère une référence unique pour chaque commande.

---

<!-- _class: light -->

# Exemple : le statique

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

On lance l'exemple complet depuis `lab-poo` :

```bash
php examples/statique/example.php
```

Résultat attendu : `CMD-0001`, puis `CMD-0002`, puis `CMD-0003`.

---

# Problème de l'étudiant

**Problème concret :** [À compléter par l'étudiant]

Expliquez la vraie situation qui oblige à utiliser une de ces notions de la POO.

---

# Solution proposée et démonstrations

**Solution proposée :** [À compléter par l'étudiant]

Les démonstrations du lab sont :

```bash
php examples/classe-abstraite/example.php
php examples/interface/example.php
php examples/heritage/example.php
php examples/polymorphisme/example.php
php examples/encapsulation/example.php
php examples/statique/example.php
```

Regardez le résultat de chaque commande. Comparez-le avec le code. Expliquez comment la notion choisie répond au problème posé.
