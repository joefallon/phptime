<?php
namespace tests\JoeFallon\PhpTime;

use JoeFallon\KissTest\UnitTest;
use JoeFallon\PhpTime\MySqlDateTime;

/**
 * @author    Joseph Fallon <joseph.t.fallon@gmail.com>
 * @copyright Copyright 2014 Joseph Fallon (All rights reserved)
 * @license   MIT
 * @package   tests\JoeFallon\TimeUtil
 */
class MySqlDateTimeTests extends UnitTest
{
    public function test_proper_length_of_datetime_string_returned()
    {
        $mysqlNow = MySqlDateTime::nowTimestamp();
        $this->assertEqual(strlen($mysqlNow), 19);
    }
}