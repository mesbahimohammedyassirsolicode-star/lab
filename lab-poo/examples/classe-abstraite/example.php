<?php

abstract class MenuItem
{
    public function __construct(
        protected string $name,
        protected int $priceCents
    ) {
    }

    abstract public function category(): string;

    public function price(): string
    {
        return number_format($this->priceCents / 100, 2, ',', ' ') . ' EUR';
    }

    public function label(): string
    {
        return sprintf('[%s] %s - %s', $this->category(), $this->name, $this->price());
    }
}

class Dish extends MenuItem
{
    public function category(): string
    {
        return 'Plat';
    }
}

class Drink extends MenuItem
{
    public function category(): string
    {
        return 'Boisson';
    }
}

$items = [
    new Dish('Tajine poulet', 8500),
    new Drink('Thé à la menthe', 1500),
];

foreach ($items as $item) {
    echo $item->label() . "\n";
}

// Une classe abstraite ne peut pas être instanciée :
// new MenuItem('Test', 1000);
