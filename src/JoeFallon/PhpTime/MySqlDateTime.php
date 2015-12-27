<?php
namespace JoeFallon\PhpTime;

class MySqlDateTime
{
    /**
     * This function gets the datetime stamp in a format suitable for storage
     * into MySQL.
     * 
     * @return string
     */
    public static function nowTimestamp()
    {
        return date('Y-m-d H:i:s');
    }
}
