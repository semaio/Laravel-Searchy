<?php

namespace TomLingham\Searchy\SearchDrivers;

use TomLingham\Searchy\Matchers\AcronymMatcher;
use TomLingham\Searchy\Matchers\ConsecutiveCharactersMatcher;
use TomLingham\Searchy\Matchers\ExactMatcher;
use TomLingham\Searchy\Matchers\InStringMatcher;
use TomLingham\Searchy\Matchers\StartOfStringMatcher;
use TomLingham\Searchy\Matchers\StartOfWordsMatcher;
use TomLingham\Searchy\Matchers\StudlyCaseMatcher;
use TomLingham\Searchy\Matchers\TimesInStringMatcher;

class FuzzySearchDriver extends BaseSearchDriver
{
    /**
     * @var array
     */
    protected $matchers = [
        ExactMatcher::class                 => 100,
        StartOfStringMatcher::class         => 50,
        AcronymMatcher::class               => 42,
        ConsecutiveCharactersMatcher::class => 40,
        StartOfWordsMatcher::class          => 35,
        StudlyCaseMatcher::class            => 32,
        InStringMatcher::class              => 30,
        TimesInStringMatcher::class         => 8,
    ];
}
