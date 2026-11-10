---
marp: true
theme: default
paginate: true
size: 16:9
---

# lab-php
## Les erreurs, les namespaces et les traits

**Étudiant :** Mohammed Yassir Mesbahi  
**Encadrant :** ES-SARRAJ Fouad  
**Formation / groupe :** [À compléter]

---

# Plan de la présentation

1. Introduction et stack technique
2. La gestion des erreurs et des exceptions
3. Les namespaces
4. Les traits
5. Problème et solution de l'étudiant
6. Démarrage rapide et démonstrations

---

# Introduction et stack technique

Ce lab présente trois notions de PHP.
Chaque notion a un exemple court. On peut le lancer dans le terminal.

- Le traitement des situations impossibles
- L'organisation des classes avec les namespaces
- La réutilisation du code avec les traits

**Stack :** PHP CLI, PHP 8.0 ou plus  
**Environnement testé :** PHP 8.4.25

Les exemples sont des démonstrations seules. Ils ne sont pas dans une application.

---

# Démarrage rapide

Depuis la racine du dépôt, on entre dans le dossier du lab :

```bash
cd lab-php
php -v
```

On teste PHP avec une seule ligne. C'est un **Hello World** :

```bash
php -r "echo 'Hello, PHP!', PHP_EOL;"
```

Résultat attendu : `Hello, PHP!`

---

# Définition : les erreurs et les exceptions

- Une **erreur** est un problème pendant l'exécution du code.
- Une **exception** est une situation impossible. Le code peut la lancer et la traiter.
- `try` contient le code qui peut lancer une exception.
- `catch` traite l'exception.
- `finally` s'exécute dans tous les cas.

Dans l'exemple, on a une classe `AgeInvalideException`. Le code traite les âges invalides.

---

<!-- _class: light -->

# Exemple : le traitement d'une exception

```php
try {
    verifierAge(-2);
} catch (AgeInvalideException $e) {
    echo "Erreur métier : " . $e->getMessage();
} finally {
    echo "Nettoyage final.";
}
```

On lance l'exemple complet depuis `lab-php` :

```bash
php examples/gestion-erreurs/example.php
```

L'exception est attrapée. Le message s'affiche. Le bloc `finally` s'exécute après.

---

# Définition : le namespace

Un **namespace** regroupe des classes. Il évite les problèmes de noms.

- `App\Models` contient la classe `User`.
- `App\Utils` contient la classe `Formatter`.
- `use` importe les classes. Le code principal peut les utiliser avec leur nom court.

---

<!-- _class: light -->

# Exemple : les namespaces

```php
use App\Models\User;
use App\Utils\Formatter;

$user = new User("Aymane");
echo Formatter::highlight($user->getName());
```

On lance l'exemple complet depuis `lab-php` :

```bash
php examples/namespaces/example.php
```

Le résultat contient le nom formaté `AYMANE`.

---

# Définition : le trait

Un **trait** contient des méthodes. Plusieurs classes peuvent les réutiliser.

- Une classe utilise un trait avec `use`.
- Dans l'exemple, le trait `Loggable` donne la méthode `log()`.
- `UserService` et `OrderService` utilisent cette méthode.

Un trait sert à réutiliser du code. Il ne remplace pas l'héritage dans tous les cas.

---

<!-- _class: light -->

# Exemple : la réutilisation avec un trait

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

On lance l'exemple complet depuis `lab-php` :

```bash
php examples/traits/example.php
```

Les deux services affichent un message de log. Ils utilisent la même méthode.

---

# Problème de l'étudiant

**Problème concret :** [À compléter par l'étudiant]

Expliquez la vraie situation qui oblige à utiliser une de ces trois notions.

---

# Solution proposée et démonstrations

**Solution proposée :** [À compléter par l'étudiant]

Les démonstrations du lab sont :

```bash
php examples/gestion-erreurs/example.php
php examples/namespaces/example.php
php examples/traits/example.php
```

Regardez le résultat de chaque commande. Comparez-le avec le code. Expliquez comment la notion choisie répond au problème posé.
