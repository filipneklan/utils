<?php

namespace FilipNeklan\Utils\Array;

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

    /**
     * Returns if the value is in an array.
     *
     * Example:
     * ```php
     * ArrayUtils::contains(2, [1, 2, 3]); // true
     * ```
     */
    public static function contains(mixed $val, ?array $array, bool $strict = false): bool
    {
        if (self::isEmpty($array)) return false;
        return in_array($val, $array, $strict);
    }

    /**
     * Returns true if $haystack contains all UNIQUE values from $needles.
     *
     * Example:
     * ```php
     * ArrayUtils::containsAll([1, 2, 3], [3, 1]);        // true
     * ArrayUtils::containsAll([1, 2, 3], [3, 3, 1]);     // true (duplicitní 3 se nevyžaduje)
     * ArrayUtils::containsAll([1, 2, 3], [4]);           // false
     * ```
     */
    public static function containsAll(?array $array, ?array $needles, bool $strict = false): bool
    {
        if (self::isEmpty($needles)) return true;
        if (self::isEmpty($array)) return false;

        foreach (array_unique($needles, SORT_REGULAR) as $needle) {
            if (!in_array($needle, $array, $strict)) {
                return false;
            }
        }
        return true;
    }

}