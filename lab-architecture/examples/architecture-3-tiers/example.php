<?php

declare(strict_types=1);

// Presentation tier: accepts input and displays the result.
final class ProductPage
{
    public function __construct(private ProductService $products)
    {
    }

    public function show(int $id): void
    {
        $product = $this->products->find($id);
        echo $product === null ? "Product not found\n" : $product . "\n";
    }
}

// Business tier: coordinates the product lookup.
final class ProductService
{
    public function __construct(private ProductDao $products)
    {
    }

    public function find(int $id): ?string
    {
        if ($id < 1) {
            throw new InvalidArgumentException('The product ID must be positive.');
        }

        return $this->products->findNameById($id);
    }
}

// Data tier: reads product data. This demo uses an array instead of a database.
final class ProductDao
{
    public function __construct(private array $products)
    {
    }

    public function findNameById(int $id): ?string
    {
        return $this->products[$id] ?? null;
    }
}

$page = new ProductPage(new ProductService(new ProductDao([1 => 'Coffee', 2 => 'Tea'])));
$page->show(1);
$page->show(99);
