<?php
use JoeFallon\KissTest\UnitTest;

require('config/main.php');

/****************************************************************************
 * Code Coverage Start
 ****************************************************************************/
$filter = new PHP_CodeCoverage_Filter();
$filter->addDirectoryToBlacklist(realpath('./'));
$filter->addDirectoryToBlacklist(realpath('../vendor'));
$coverage = new PHP_CodeCoverage(null, $filter);
$coverage->start('All Tests');


/****************************************************************************
 * Unit Tests
 ****************************************************************************/
new \tests\JoeFallon\PhpTime\ChronographTests();
new \tests\JoeFallon\PhpTime\DaysTests();
new \tests\JoeFallon\PhpTime\MonthsTests();
new \tests\JoeFallon\PhpTime\MySqlDateTimeTests();

UnitTest::getAllUnitTestsSummary();


/****************************************************************************
 * Code Coverage Stop
 ****************************************************************************/
$coverage->stop();
$writer = new PHP_CodeCoverage_Report_HTML();
$writer->process($coverage, realpath('../cov'));