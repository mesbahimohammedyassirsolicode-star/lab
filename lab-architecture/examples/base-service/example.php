<?php

declare(strict_types=1);

// Shared base class keeps common ID validation in one place.
abstract class BaseService
{
    protected function requirePositiveId(int $id): void
    {
        if ($id < 1) {
            throw new InvalidArgumentException('The ID must be positive.');
        }
    }
}

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

final class ProductService extends BaseService
{
    public function __construct(private ProductDao $products)
    {
    }

    public function find(int $id): ?string
    {
        $this->requirePositiveId($id);
        return $this->products->findNameById($id);
    }
}

final class CategoryService extends BaseService
{
    public function find(int $id): string
    {
        $this->requirePositiveId($id);
        return $id === 1 ? 'Beverages' : 'Category not found';
    }
}

$products = new ProductService(new InMemoryProductDao([1 => 'Coffee']));
$categories = new CategoryService();
echo $products->find(1) ?? 'Product not found', PHP_EOL;
echo $categories->find(1), PHP_EOL;
