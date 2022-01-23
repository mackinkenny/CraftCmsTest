<?php
/**
 * TestNews plugin for Craft CMS 3.x
 *
 * New plugin for news
 *
 * @link      TestNews.com
 * @copyright Copyright (c) 2022 Erkin
 */

namespace testnews\testnewstests\unit;

use Codeception\Test\Unit;
use UnitTester;
use Craft;
use testnews\testnews\TestNews;

/**
 * ExampleUnitTest
 *
 *
 * @author    Erkin
 * @package   TestNews
 * @since     1.0.0
 */
class ExampleUnitTest extends Unit
{
    // Properties
    // =========================================================================

    /**
     * @var UnitTester
     */
    protected $tester;

    // Public methods
    // =========================================================================

    // Tests
    // =========================================================================

    /**
     *
     */
    public function testPluginInstance()
    {
        $this->assertInstanceOf(
            TestNews::class,
            TestNews::$plugin
        );
    }

    /**
     *
     */
    public function testCraftEdition()
    {
        Craft::$app->setEdition(Craft::Pro);

        $this->assertSame(
            Craft::Pro,
            Craft::$app->getEdition()
        );
    }
}
