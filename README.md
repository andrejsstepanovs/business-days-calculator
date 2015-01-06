business-days-calculator
========================

Business Days Calculator


[![Build Status](https://travis-ci.org/andrejsstepanovs/business-days-calculator.png?branch=master)](https://travis-ci.org/andrejsstepanovs/business-days-calculator) [![Scrutinizer Quality Score](https://scrutinizer-ci.com/g/andrejsstepanovs/business-days-calculator/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/andrejsstepanovs/business-days-calculator/)[![Coverage Status](https://coveralls.io/repos/andrejsstepanovs/business-days-calculator/badge.png?branch=master)](https://coveralls.io/r/andrejsstepanovs/business-days-calculator?branch=master) [![Latest Stable Version](https://poser.pugx.org/andrejsstepanovs/business-days-calculator/v/stable.png)](https://packagist.org/packages/andrejsstepanovs/business-days-calculator) [![License](https://poser.pugx.org/andrejsstepanovs/business-days-calculator/license.png)](https://packagist.org/packages/andrejsstepanovs/business-days-calculator)

# Install

    "require": {
        "andrejsstepanovs/business-days-calculator": "1.*",
    }

# Example

``` php
use \BusinessDays\Calculator;

$holidays = [
    new \DateTime('2000-12-31'),
    new \DateTime('2001-01-01')
];

$freeDays = [
    new \DateTime('2000-12-28')
];

$freeWeekDays = [
    Calculator::SATURDAY,
    Calculator::SUNDAY
];

$calculator = new Calculator();
$calculator->setStartDate(new \DateTime('2000-12-27'));
$calculator->setFreeWeekDays($freeWeekDays); // repeat every week
$calculator->setHolidays($holidays);         // repeat every year
$calculator->setFreeDays($freeDays);         // don't repeat

$calculator->addBusinessDays(3);             // add X working days

$result = $calculator->getDate();            // \DateTime
echo $result->format('Y-m-d');               // 2001-01-03
```
