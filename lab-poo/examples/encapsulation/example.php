<?php

class RestaurantTable
{
    private int $reservedSeats = 0;

    public function __construct(
        private int $number,
        private int $seats
    ) {
        if ($seats < 1) {
            throw new InvalidArgumentException('Une table doit avoir au moins une place.');
        }
    }

    public function reserve(int $people): void
    {
        if ($people < 1) {
            throw new InvalidArgumentException('Le nombre de personnes doit être positif.');
        }

        if ($this->reservedSeats + $people > $this->seats) {
            throw new RuntimeException('Pas assez de places disponibles.');
        }

        $this->reservedSeats += $people;
        echo "Table {$this->number} : {$people} place(s) réservée(s).\n";
    }

    public function getNumber(): int
    {
        return $this->number;
    }

    public function getAvailableSeats(): int
    {
        return $this->seats - $this->reservedSeats;
    }
}

$table = new RestaurantTable(12, 4);
echo "Table {$table->getNumber()} - places disponibles : {$table->getAvailableSeats()}\n";

$table->reserve(2);
echo "Places disponibles : {$table->getAvailableSeats()}\n";

try {
    $table->reserve(3);
} catch (RuntimeException $e) {
    echo "Réservation refusée : {$e->getMessage()}\n";
}

// L'état interne est privé : cette ligne provoquerait une erreur fatale.
// $table->reservedSeats = 10;
