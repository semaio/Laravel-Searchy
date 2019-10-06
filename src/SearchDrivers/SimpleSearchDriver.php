<?php

namespace TomLingham\Searchy\SearchDrivers;

use TomLingham\Searchy\Matchers\ExactMatcher;
use TomLingham\Searchy\Matchers\InStringMatcher;
use TomLingham\Searchy\Matchers\StartOfStringMatcher;

class SimpleSearchDriver extends BaseSearchDriver
{
    /**
     * @var array
     */
    protected $matchers = [
        ExactMatcher::class         => 100,
        StartOfStringMatcher::class => 50,
        InStringMatcher::class      => 30,
    ];
}
