<?php
namespace tests\JoeFallon\Time;

use JoeFallon\KissTest\UnitTest;
use JoeFallon\Time\Days;


/**
 * @author    Joseph Fallon <joseph.t.fallon@gmail.com>
 * @copyright Copyright 2014 Joseph Fallon (All rights reserved)
 * @license   MIT
 */
class DaysTests extends UnitTest
{
    public function test_proper_days_exist()
    {
        $this->assertEqual(Days::SUN, 'Sunday');
        $this->assertEqual(Days::MON, 'Monday');
        $this->assertEqual(Days::TUE, 'Tuesday');
        $this->assertEqual(Days::WED, 'Wednesday');
        $this->assertEqual(Days::THU, 'Thursday');
        $this->assertEqual(Days::FRI, 'Friday');
        $this->assertEqual(Days::SAT, 'Saturday');
    }
}
