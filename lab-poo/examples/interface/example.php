<?php

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

class CardPayment implements PaymentMethod
{
    public function __construct(private string $lastFourDigits)
    {
    }

    public function pay(int $amountCents): string
    {
        return sprintf(
            'Paiement par carte (****%s) : %s',
            $this->lastFourDigits,
            number_format($amountCents / 100, 2, ',', ' ') . ' EUR'
        );
    }
}

function checkout(PaymentMethod $method, int $amountCents): void
{
    echo $method->pay($amountCents) . "\n";
}

checkout(new CashPayment(), 2500);
checkout(new CardPayment('4242'), 4800);
