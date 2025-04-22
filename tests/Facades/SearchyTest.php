<?php

namespace TomLingham\Tests\Searchy\Facades;

use GrahamCampbell\TestBenchCore\FacadeTrait;
use TomLingham\Searchy\Facades\Searchy;
use TomLingham\Searchy\SearchBuilder;
use TomLingham\Tests\Searchy\AbstractTestCase;

/**
 * This is the searchy facade test class.
 *
 * @author Vincent Klaiber <hello@vinkla.com>
 */
class SearchyTest extends AbstractTestCase
{
    use FacadeTrait;

    protected static function getFacadeAccessor(): string
    {
        return 'searchy';
    }

    protected static function getFacadeClass(): string
    {
        return Searchy::class;
    }

    protected static function getFacadeRoot(): string
    {
        return SearchBuilder::class;
    }
}
