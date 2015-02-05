# phptime

By [Joe Fallon](http://blog.joefallon.net)

Joe's PHP Time Utilities is a set of classes useful for assisting with
working with time related values in PHP and MySQL. It is important to
note that this is not an all inclusive date and time solution. Currently,
it provides the following capabilities:

1. A millisecond resolution chronograph is provided to easily measure the
   elapsed time between two events.
2. A class containing a collection of constants representing every day of
   the week is provided.
3. A class containing a collection of constants representing every month
   of the year is provided.
4. A class containing a method for getting a time stamp that is suitable
   for immediate insertion into MySQL (i.e. `Y-m-d H:i:s`) is provided.

## Installation

The easiest way to install Joe's PHP Time Utilities is with
[Composer](https://getcomposer.org/). Create the following `composer.json` file
and run the `php composer.phar install` command to install it.

```json
{
    "require": {
        "joefallon/phptime": "*"
    }
}
```

## Class Documentation

### Chronograph

Here is an example of using `Chronograph` to measure the time elapsed in
milliSeconds between a start time and stop time:

```php
use JoeFallon\TimeUtil\Chronograph;

$chrono = new Chronograph();
$chrono->start();   // start the chronograph

// Perform other work.

$chrono->stop();    // stop the chronograph
$ms = $chrono->getElapsedTimeInMillisecs();
```

Here is an example of using `Chronograph` to measure the time elapsed in
seconds between a start time and stop time:

```php
use JoeFallon\TimeUtil\Chronograph;

$chrono = new Chronograph();
$chrono->start();   // start the chronograph

// Perform other work.

$chrono->stop();    // stop the chronograph
$secs = $chrono->getElapsedTimeInSeconds();
```

### Days

Here is the contents of the `Days` class:

```php
class Days
{
    const SUN = 'Sunday';
    const MON = 'Monday';
    const TUE = 'Tuesday';
    const WED = 'Wednesday';
    const THU = 'Thursday';
    const FRI = 'Friday';
    const SAT = 'Saturday';
}
```

### Months

Here is the contents of the `Months` class:

```php
class Months
{
    const JAN = 'January';
    const FEB = 'February';
    const MAR = 'March';
    const APR = 'April';
    const MAY = 'May';
    const JUN = 'June';
    const JUL = 'July';
    const AUG = 'August';
    const SEP = 'September';
    const OCT = 'October';
    const NOV = 'November';
    const DEC = 'December';
}
```

### MySqlDateTime

Here is an example of using `MySqlDateTime` to get a time-stamp suitable for
immediate insertion into MySQL:


```php
use JoeFallon\TimeUtil\MySqlDateTime;

$mysqlNow = MySqlDateTime::nowTimestamp(); // e.g. 2014-07-15 18:23:45
```
