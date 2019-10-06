<?php

namespace TomLingham\Searchy\SearchDrivers;

use TomLingham\Searchy\Matchers\AcronymUnicodeMatcher;
use TomLingham\Searchy\Matchers\ConsecutiveCharactersUnicodeMatcher;
use TomLingham\Searchy\Matchers\ExactMatcher;
use TomLingham\Searchy\Matchers\InStringMatcher;
use TomLingham\Searchy\Matchers\StartOfStringMatcher;
use TomLingham\Searchy\Matchers\StartOfWordsMatcher;
use TomLingham\Searchy\Matchers\StudlyCaseUnicodeMatcher;
use TomLingham\Searchy\Matchers\TimesInStringMatcher;

class FuzzySearchUnicodeDriver extends BaseSearchDriver
{
    /**
     * @var array
     */
    protected $matchers = [
        ExactMatcher::class                        => 100,
        StartOfStringMatcher::class                => 50,
        AcronymUnicodeMatcher::class               => 42,
        ConsecutiveCharactersUnicodeMatcher::class => 40,
        StartOfWordsMatcher::class                 => 35,
        StudlyCaseUnicodeMatcher::class            => 32,
        InStringMatcher::class                     => 30,
        TimesInStringMatcher::class                => 8,
    ];
}
