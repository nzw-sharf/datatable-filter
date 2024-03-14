<?php
return [

    'operators' => [
        '$eq' =>    'Equal',
        '$eqc' =>    'Equal (case-sensitive)',
        '$ne' =>    'Not equal',
        '$lt' =>    'Less than',
        '$lte' =>    'Less than or equal to',
        '$gt' =>    'Greater than',
        '$gte' =>    'Greater than or equal to',
        '$in' =>    'Included in an array',
        '$notIn' =>    'Not included in an array',
        '$contains' =>    'Contains',
        '$notContains' =>    'Does not contain',
        '$containsc' =>    'Contains (case-sensitive)',
        '$notContainsc' =>    'Does not contain (case-sensitive)',
        '$null' =>    'Is null',
        '$notNull' =>    'Is not null',
        '$between' =>    'Is between',
        '$startsWith' => 'Starts with',
        '$startsWithc' =>    'Starts with (case-sensitive)',
        '$endsWith' =>    'Ends with',
        '$endsWithc' =>    'Ends with (case-sensitive)',
    ],

    'fields' => [
        'id' => 'id',
        'title' => 'title',
        'price' => 'price',
        'type' => 'type',
        'bedroom' => 'bedroom',
        'bathroom' => 'bathroom',
        'portals' => 'portals',
    ]

];
