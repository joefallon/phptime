<?php
use JoeFallon\KissTest\UnitTest;

require('config/main.php');


new \tests\JoeFallon\Time\ChronographTests();
new \tests\JoeFallon\Time\DaysTests();
new \tests\JoeFallon\Time\MonthsTests();
new \tests\JoeFallon\Time\MySqlDateTimeTests();

UnitTest::getAllUnitTestsSummary();