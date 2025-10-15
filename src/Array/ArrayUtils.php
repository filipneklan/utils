<?php


class ArrayUtils
{

    /**
     * Returns true if the array is null or empty.
     *
     * Example:
     * ```php
     * ArrayUtils::isEmpty([]); // true
     * ArrayUtils::isEmpty(null); // true
     * ArrayUtils::isEmpty(['a']); // false
     * ```
     */
    public static function isEmpty(?array $array): bool
    {
        return ($array === null || $array === []);
    }

    /**
     * Returns true if the array is not empty.
     *
     * Example:
     * ```php
     * ArrayUtils::isNotEmpty([1, 2, 3]); // true
     * ```
     */
    public static function isNotEmpty(?array $array): bool
    {
        return !self::isEmpty($array);
    }

    /**
     * Returns the first element of the array, or null if it’s empty.
     *
     * Example:
     * ```php
     * ArrayUtils::first(['a', 'b', 'c']); // 'a'
     * ```
     */
    public static function first(array $array): mixed
    {
        return $array[array_key_first($array)] ?? null;
    }

    /**
     * Returns the last element of the array, or null if it’s empty.
     *
     * Example:
     * ```php
     * ArrayUtils::last(['a', 'b', 'c']); // 'c'
     * ```
     */
    public static function last(array $array): mixed
    {
        return $array[array_key_last($array)] ?? null;
    }

}