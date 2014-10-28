<?php
use JoeFallon\KissTest\UnitTest;

require('config/main.php');


new \tests\JoeFallon\PhpTime\ChronographTests();
new \tests\JoeFallon\PhpTime\DaysTests();
new \tests\JoeFallon\PhpTime\MonthsTests();
new \tests\JoeFallon\PhpTime\MySqlDateTimeTests();

UnitTest::getAllUnitTestsSummary();