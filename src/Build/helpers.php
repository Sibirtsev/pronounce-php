<?php

/**
 * Explode by comma
 *
 * @param string $string
 * @return array
*/
function explodeByComma($string)
{
    $string = strtoupper($string);

    return explode(',', $string);
}

/**
 * Find comments in CMU file
 *
 * @param string $line
 * @return bool
*/
function isComment($line)
{
    if (substr($line, 0, 3) === ';;;')
    {
        return true;
    }

    return false;
}

/**
 * Replace spaces with underscores
 *
 * @param array $strings
 * @return string
*/
function spacesToUnderscores($strings)
{
    $array = [];

    foreach ($strings as $string)
    {
        array_push($array, str_replace(' ', '_', $string));
    }

    return $array;
}

/**
 * Make an underscored word camel-case
 *
 * @param string $string
 * @return string
*/
function underscoreToCamelCase($string)
{
    $string = strtolower($string);

    $index = strpos($string, '_');

    $letter = strtoupper($string[$index + 1]);

    $string[$index + 1] = $letter;

    $string = str_replace('_', '', $string);

    return $string;
}