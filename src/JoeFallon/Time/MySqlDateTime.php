<?php
namespace JoeFallon\Time;


/**
 * @author    Joseph Fallon <joseph.t.fallon@gmail.com>
 * @copyright Copyright 2014 Joseph Fallon (All rights reserved)
 * @license   MIT
 */
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