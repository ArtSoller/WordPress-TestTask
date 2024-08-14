<?php

/**
 * Plugin configuration file
 *
 * @package   Cra\CtPeople
 * @author    Squiz Pty Ltd <products@squiz.net>
 * @copyright 2021 Squiz Pty Ltd (ABN 77 084 670 600)
 * @license   proprietary
 */

declare(strict_types=1);

namespace Cra\CtPeople;

$ctPeoplePlugin = [
    'textdomain' => 'ct-people',
    'languages_dir' => 'languages',
];

return [
    'Cra' => [
        'CtPeople' => [
            'Plugin' => $ctPeoplePlugin,
        ],
    ],
];
