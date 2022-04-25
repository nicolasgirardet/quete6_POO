<?php

class Speedometer 
{
    public const SPEED_CONVERSION = 1.609344;

    public static function convertKmToMiles(float $speed): float
    {
        return number_format($speed / self::SPEED_CONVERSION, 2);

    }

    public static function convertMilesToKm(float $speed): float
    {
        return number_format($speed * self::SPEED_CONVERSION, 2);
    }
}
