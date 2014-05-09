<?php

if (!function_exists('p')) {
    function p($data)
    {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }

}

if (!function_exists('starts_with'))
{
    function starts_with($haystack, $needle)
    {
        $length = strlen($needle);
        return (substr($haystack, 0, $length) === $needle);
    }
}


if (!function_exists('ends_with'))
{
    function ends_with($haystack, $needle)
    {
        $length = strlen($needle);
        if ($length == 0) {
            return true;
        }

        return (substr($haystack, -$length) === $needle);
    }
}

if (!function_exists('concat'))
{
    function concat($object, $fields = array(), $seperator = ' ')
    {
        $return = array();
        if (is_array($object))
        {
            foreach( $fields as $field )
                $return[] = $object[$field];
        }
        else if (is_object($object))
        {
            foreach( $fields as $field )
                $return[] = $object->$field;
        }
        if (count($return) > 0)
            return implode($seperator, $return);
        return "";
    }
}

if (!function_exists("current_path")) {
    function current_path()
    {
        return $_SERVER['REQUEST_URI'];
    }
}