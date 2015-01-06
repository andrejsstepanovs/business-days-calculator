<?php

use BusinessDays\Calculator;


return [
    [
        'Iterate 1 day',
        new \DateTime('2013-01-01'),
        1,
        new \DateTime('2013-01-02'),
    ],
    [
        'Iterate 2 days',
        new \DateTime('2014-07-25'),
        2,
        new \DateTime('2014-07-27'),
    ],
    [
        'Iterate 3 days',
        new \DateTime('2014-06-29'),
        3,
        new \DateTime('2014-07-02'),
    ],
    [
        'Iterate 1 year',
        new \DateTime('2014-06-29'),
        365,
        new \DateTime('2015-06-29'),
    ],
    [
        'Iterate 1 day with free saturday and sunday',
        new \DateTime('2014-07-25'),
        1,
        new \DateTime('2014-07-28'),
        [Calculator::SATURDAY, Calculator::SUNDAY],
    ],
    [
        'Iterate 1 day with free friday',
        new \DateTime('2014-07-31'),
        1,
        new \DateTime('2014-08-02'),
        [Calculator::FRIDAY],
    ],
    [
        'Iterate 1 day with free all days except monday',
        new \DateTime('2014-07-01'),
        1,
        new \DateTime('2014-07-07'),
        [
            Calculator::TUESDAY,
            Calculator::WEDNESDAY,
            Calculator::THURSDAY,
            Calculator::FRIDAY,
            Calculator::SATURDAY,
            Calculator::SUNDAY,
        ],
    ],
    [
        'Iterate 1 day with free day in the middle',
        new \DateTime('2014-07-01'),
        1,
        new \DateTime('2014-07-03'),
        [],
        [new \DateTime('2014-07-02')]
    ],
    [
        'Iterate 2 days with 3 free days in the middle',
        new \DateTime('2014-07-01'),
        2,
        new \DateTime('2014-07-06'),
        [],
        [new \DateTime('2014-07-02'), new \DateTime('2014-07-03'), new \DateTime('2014-07-04')]
    ],
    [
        'Iterate 1 day with free Thursday and 2 free days in the middle',
        new \DateTime('2014-07-01'),
        1,
        new \DateTime('2014-07-05'),
        [Calculator::THURSDAY],
        [new \DateTime('2014-07-02'), new \DateTime('2014-07-04')]
    ],
    [
        'Iterate 4 days with free Tuesday and 2 free days in the middle',
        new \DateTime('2014-06-30'),
        4,
        new \DateTime('2014-07-07'),
        [Calculator::TUESDAY],
        [new \DateTime('2014-07-02'), new \DateTime('2014-07-04')]
    ],
    [
        'Iterate 1 day with holiday in the middle',
        new \DateTime('2014-07-01'),
        1,
        new \DateTime('2014-07-03'),
        [],
        [],
        [new \DateTime('2000-07-02')]
    ],
    [
        'Iterate 1 day with holiday and free day in the middle',
        new \DateTime('2014-07-01'),
        1,
        new \DateTime('2014-07-04'),
        [],
        [new \DateTime('2014-07-03')],
        [new \DateTime('2000-07-02')]
    ],
    [
        'Iterate 1 day with holiday, free day and free Friday in the middle',
        new \DateTime('2014-07-01'),
        1,
        new \DateTime('2014-07-05'),
        [Calculator::FRIDAY],
        [new \DateTime('2014-07-03')],
        [new \DateTime('2000-07-02')]
    ],
    [
        'Iterate 1 day with holiday, free day and free Friday in the middle + other unrelated days',
        new \DateTime('2014-07-01'),
        1,
        new \DateTime('2014-07-05'),
        [Calculator::SUNDAY, Calculator::FRIDAY],
        [new \DateTime('2014-08-03'), new \DateTime('2014-10-03'), new \DateTime('2014-07-03')],
        [new \DateTime('2000-07-22'), new \DateTime('2000-09-02'), new \DateTime('2000-07-02')]
    ],
];