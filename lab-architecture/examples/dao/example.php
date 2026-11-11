<?php

declare(strict_types=1);

// DAO contract keeps callers independent from the storage mechanism.
interface ProductDao
{
    public function findNameById(int $id): ?string;
}

// In-memory implementation makes the example easy to run without a database.
final class InMemoryProductDao implements ProductDao
{
    public function __construct(private array $products)
    {
    }

    public function findNameById(int $id): ?string
    {
        return $this->products[$id] ?? null;
    }
}

$dao = new InMemoryProductDao([1 => 'Coffee', 2 => 'Tea']);
echo $dao->findNameById(1) ?? 'Not found', PHP_EOL;
echo $dao->findNameById(99) ?? 'Not found', PHP_EOL;
