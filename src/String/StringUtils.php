<?php

namespace FilipNeklan\Utils\String;

class StringUtils
{

    /**
     * Returns true if the string is null, empty, or consists only of whitespace.
     *
     * Example:
     * ```php
     * StringUtils::isBlank("   "); // true
     * StringUtils::isBlank(null);  // true
     * StringUtils::isBlank("abc"); // false
     * ```
     */
    public static function isBlank(?string $string): bool
    {
        return $string === null || trim($string) === '';
    }

    /**
     * Returns true if the string is not blank.
     *
     * Example:
     * ```php
     * StringUtils::isNotBlank("abc"); // true
     * ```
     */
    public static function isNotBlank(?string $string): bool
    {
        return !self::isBlank($string);
    }

    /**
     * Checks if a string contains a substring (case-sensitive).
     *
     * Example:
     * ```php
     * StringUtils::contains("Hello World", "World"); // true
     * ```
     */
    public static function contains(?string $str, string $substr): bool
    {
        return $str !== null && str_contains($str, $substr);
    }

    /**
     * Checks if a string contains a substring, ignoring case.
     *
     * Example:
     * ```php
     * StringUtils::containsIgnoreCase("Hello World", "world"); // true
     * ```
     */
    public static function containsIgnoreCase(?string $str, string $substr): bool
    {
        return $str !== null && stripos($str, $substr) !== false;
    }

    /**
     * Compares two strings, ignoring case.
     *
     * Example:
     * ```php
     * StringUtils::equalsIgnoreCase("Test", "test"); // true
     * ```
     */
    public static function equalsIgnoreCase(?string $a, ?string $b): bool
    {
        if ($a === null || $b === null) return false;
        return strtolower($a) === strtolower($b);
    }

}