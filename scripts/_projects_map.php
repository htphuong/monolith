<?php

namespace go1\monolith\scripts;

$map = [
    'php/libraries'  => [
        //'graph_mock'     => 'graph-mock',
        'middleware'     => 'middlewares',
    ],
    'drupal'         => [
        'gc'             => 'gocatalyze',
    ],
    'web'            => [
        'ui'             => 'apiom-ui',
        'website'        => 'go1web',
    ],
    'infrastructure' => [
        'ecs'            => 'launch-configuration',
    ],
];
