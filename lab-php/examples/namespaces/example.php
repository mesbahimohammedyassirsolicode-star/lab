<?php

namespace App\Models {
    class User
    {
        public function __construct(private string $name)
        {
        }

        public function getName(): string
        {
            return $this->name;
        }
    }
}

namespace App\Utils {
    class Formatter
    {
        public static function highlight(string $name): string
        {
            return strtoupper($name);
        }
    }
}

namespace {
    use App\Models\User;
    use App\Utils\Formatter;

    $user = new User("Aymane");

    echo "Nom : " . $user->getName() . "\n";
    echo "Nom formaté : " . Formatter::highlight($user->getName()) . "\n";
}
