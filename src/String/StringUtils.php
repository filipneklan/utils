<?php

namespace String;

class StringUtils
{

    public static function isBlank(?string $string): bool
    {
        if ($string === null) return true;
        if (strlen(trim($string)) === 0) return true;

        return false;
    }

    public static function isNotBlank(?string $string): bool
    {
        return !self::isBlank($string);
    }

}