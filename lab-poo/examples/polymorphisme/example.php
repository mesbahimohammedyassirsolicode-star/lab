<?php

abstract class Order
{
    protected array $items = [];

    public function addItem(int $priceCents): void
    {
        $this->items[] = $priceCents;
    }

    protected function itemsTotalCents(): int
    {
        return array_sum($this->items);
    }

    abstract public function totalCents(): int;

    abstract public function type(): string;
}

class DineInOrder extends Order
{
    public function totalCents(): int
    {
        return (int) round($this->itemsTotalCents() * 1.10);
    }

    public function type(): string
    {
        return 'Sur place (service 10 %)';
    }
}

class TakeawayOrder extends Order
{
    public function totalCents(): int
    {
        return $this->itemsTotalCents() + 200;
    }

    public function type(): string
    {
        return 'À emporter (emballage 2,00 EUR)';
    }
}

$orders = [new DineInOrder(), new TakeawayOrder()];

$orders[0]->addItem(8500);
$orders[0]->addItem(1500);
$orders[1]->addItem(9500);

foreach ($orders as $order) {
    echo $order->type() . ' -> total : '
        . number_format($order->totalCents() / 100, 2, ',', ' ') . " EUR\n";
}
