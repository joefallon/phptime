<?php
namespace tests\JoeFallon\Time;

use JoeFallon\KissTest\UnitTest;
use JoeFallon\Time\Months;

/**
 * @author    Joseph Fallon <joseph.t.fallon@gmail.com>
 * @copyright Copyright 2014 Joseph Fallon (All rights reserved)
 * @license   MIT
 */
class MonthsTests extends UnitTest
{
    public function test_proper_months_exist()
    {
        $this->assertEqual(Months::JAN, 'January');
        $this->assertEqual(Months::FEB, 'February');
        $this->assertEqual(Months::MAR, 'March');
        $this->assertEqual(Months::APR, 'April');
        $this->assertEqual(Months::MAY, 'May');
        $this->assertEqual(Months::JUN, 'June');
        $this->assertEqual(Months::JUL, 'July');
        $this->assertEqual(Months::AUG, 'August');
        $this->assertEqual(Months::SEP, 'September');
        $this->assertEqual(Months::OCT, 'October');
        $this->assertEqual(Months::NOV, 'November');
        $this->assertEqual(Months::DEC, 'December');
    }
}
