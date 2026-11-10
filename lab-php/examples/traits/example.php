<?php

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

    public function createUser(string $name): void
    {
        $this->log("Création de l'utilisateur : " . $name);
        echo "Utilisateur {$name} créé avec succès.\n";
    }
}

class OrderService
{
    use Loggable;

    public function createOrder(string $orderId): void
    {
        $this->log("Création de la commande : " . $orderId);
        echo "Commande {$orderId} enregistrée.\n";
    }
}

$userService = new UserService();
$orderService = new OrderService();

$userService->createUser("Aymane");
$orderService->createOrder("A-1001");
