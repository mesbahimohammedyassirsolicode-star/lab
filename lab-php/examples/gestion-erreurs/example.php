<?php

class AgeInvalideException extends InvalidArgumentException
{
}

function verifierAge(int $age): void
{
    if ($age < 0) {
        throw new AgeInvalideException("L'âge ne peut pas être négatif.");
    }

    if ($age < 18) {
        throw new AgeInvalideException("L'utilisateur doit être majeur pour accéder.");
    }

    echo "Accès autorisé. Age : {$age}\n";
}

echo "Début du traitement...\n";

try {
    verifierAge(22);
    verifierAge(-2);
} catch (AgeInvalideException $e) {
    echo "Erreur métier : " . $e->getMessage() . "\n";
} catch (Exception $e) {
    echo "Erreur technique : " . $e->getMessage() . "\n";
} finally {
    echo "Nettoyage final : fermeture des ressources.\n";
}

echo "Fin du script.\n";
