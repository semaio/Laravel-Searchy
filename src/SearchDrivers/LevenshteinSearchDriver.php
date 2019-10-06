<?php

namespace TomLingham\Searchy\SearchDrivers;

use TomLingham\Searchy\Matchers\LevenshteinMatcher;

class LevenshteinSearchDriver extends BaseSearchDriver
{
    /**
     * @var array
     */
    protected $matchers = [
        LevenshteinMatcher::class => 100,
    ];
}
