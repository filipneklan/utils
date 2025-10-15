<?php


class ArrayUtils
{

    public static function isEmpty(?array $array): bool
    {
        return ($array === null || count($array) === 0);
    }

    public static function isNotEmpty(?array $array): bool
    {
        return !self::isEmpty($array);
    }

}