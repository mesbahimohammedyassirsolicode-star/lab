<?php

declare(strict_types=1);

interface ProductDao
{
    public function findNameById(int $id): ?string;
}

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

// The service owns business rules; the DAO only retrieves data.
final class ProductService
{
    public function __construct(private ProductDao $products)
    {
    }

    public function displayName(int $id): string
    {
        if ($id < 1) {
            throw new InvalidArgumentException('The product ID must be positive.');
        }

        return $this->products->findNameById($id) ?? 'Product not found';
    }
}

$service = new ProductService(new InMemoryProductDao([1 => 'Coffee']));
echo $service->displayName(1), PHP_EOL;
echo $service->displayName(99), PHP_EOL;
