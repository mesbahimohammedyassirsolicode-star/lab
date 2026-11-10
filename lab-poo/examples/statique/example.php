<?php

class OrderNumber
{
    public const PREFIX = 'CMD';

    private static int $sequence = 0;

    public static function next(): string
    {
        self::$sequence++;

        return sprintf('%s-%04d', self::PREFIX, self::$sequence);
    }

    public static function generated(): int
    {
        return self::$sequence;
    }
}

echo OrderNumber::next() . "\n";
echo OrderNumber::next() . "\n";
echo OrderNumber::next() . "\n";

echo 'Numéros générés : ' . OrderNumber::generated() . "\n";
