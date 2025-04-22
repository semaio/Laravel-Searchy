<?php

namespace TomLingham\Tests\Searchy;

use GrahamCampbell\TestBench\AbstractPackageTestCase;
use TomLingham\Searchy\SearchyServiceProvider;

/**
 * This is the abstract test case class.
 *
 * @author Vincent Klaiber <hello@vinkla.com>
 */
abstract class AbstractTestCase extends AbstractPackageTestCase
{
    protected static function getServiceProviderClass(): string
    {
        return SearchyServiceProvider::class;
    }
}
