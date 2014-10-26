<?php
namespace tests\JoeFallon\PhpTime;

use JoeFallon\KissTest\UnitTest;
use JoeFallon\PhpTime\Chronograph;

/**
 * @author    Joseph Fallon <joseph.t.fallon@gmail.com>
 * @copyright Copyright 2014 Joseph Fallon (All rights reserved)
 * @license   MIT
 */
class ChronographTests extends UnitTest
{
    public function test_getElapsedTimeInMillisecs_is_zero_when_chrono_not_started()
    {
        $chrono = new Chronograph();
        $chrono->stop();
        $ms = $chrono->getElapsedTimeInMillisecs();

        $this->assertEqual($ms, 0.0);
    }


    public function test_getElaspedTimeInSeconds_is_zero_when_chrono_not_started()
    {
        $chrono = new Chronograph();
        $chrono->stop();
        $s = $chrono->getElaspedTimeInSeconds();

        $this->assertEqual($s, 0);
    }
}
