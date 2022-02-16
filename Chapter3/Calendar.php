<?php

define('YEAR', 2021);
class Calendar
{
    public $name;
    public $weeksInYear = 365/7;
    public $seasons = ['Spring', 'Summer', 'Autumn', 'Winter'];
    public $year = YEAR;
    // Static properties
    // Value can change but remains the same (static) for class and instances
    public static $daysInFebruary = 28;
    public static $count = 0;
    public function __construct()
    {
        self::$count++;
    }
    // Class constants
    // Fixed values associated with this class
    const MONTHS_IN_YEAR =12;

    public function getMonthsInYear()
    {
        return self::MONTHS_IN_YEAR;
    }

}

$calendar = new Calendar();
$calendar2 = new Calendar();

$calendar->name = 'Year Planner';

print Calendar::$daysInFebruary . PHP_EOL;
Calendar::$daysInFebruary++;
print Calendar::$count . PHP_EOL;

print_r($calendar->weeksInYear . PHP_EOL);
print_r($calendar->year . PHP_EOL);