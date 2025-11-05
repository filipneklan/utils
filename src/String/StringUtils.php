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
        if ($string === null) return true;
        return trim($string) === '';
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

    /**
     * Trims whitespace from the beginning and end of the string.
     * Returns `null` if the input is `null` or blank (empty or whitespace only).
     *
     * Example:
     * ```php
     * StringUtils::trimToNull("  test  "); // "test"
     * StringUtils::trimToNull("   ");      // null
     * StringUtils::trimToNull(null);       // null
     * ```
     */
    public static function trimToNull(?string $str): ?string
    {
        return self::isBlank($str) ? null : trim($str);
    }

    /**
     * Trims whitespace from the beginning and end of the string.
     * Returns an empty string (`""`) if the input is `null`.
     *
     * Example:
     * ```php
     * StringUtils::trimToEmpty("  test  "); // "test"
     * StringUtils::trimToEmpty(null);       // ""
     * ```
     */
    public static function trimToEmpty(?string $str): string
    {
        return $str === null ? '' : trim($str);
    }

}