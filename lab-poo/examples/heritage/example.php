<?php

class Order
{
    protected array $items = [];

    public function __construct(protected string $reference)
    {
    }

    public function addItem(string $name, int $priceCents): void
    {
        $this->items[] = ['name' => $name, 'priceCents' => $priceCents];
    }

    public function totalCents(): int
    {
        return array_sum(array_column($this->items, 'priceCents'));
    }

    public function describe(): string
    {
        return sprintf(
            '%s (%d article(s)) : %s EUR',
            $this->reference,
            count($this->items),
            number_format($this->totalCents() / 100, 2, ',', ' ')
        );
    }
}

class DineInOrder extends Order
{
    public function __construct(string $reference, private int $tableNumber)
    {
        parent::__construct($reference);
    }

    public function describe(): string
    {
        return parent::describe() . ' - sur place, table ' . $this->tableNumber;
    }
}

class TakeawayOrder extends Order
{
    public function __construct(string $reference, private string $customerName)
    {
        parent::__construct($reference);
    }

    public function describe(): string
    {
        return parent::describe() . ' - à emporter pour ' . $this->customerName;
    }
}

$dineIn = new DineInOrder('CMD-001', 12);
$dineIn->addItem('Tajine poulet', 8500);
$dineIn->addItem('Thé à la menthe', 1500);

$takeaway = new TakeawayOrder('CMD-002', 'Aymane');
$takeaway->addItem('Couscous', 9500);

echo $dineIn->describe() . "\n";
echo $takeaway->describe() . "\n";
