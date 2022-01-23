<?php
/**
 * TestNews plugin for Craft CMS 3.x
 *
 * New plugin for news
 *
 * @link      TestNews.com
 * @copyright Copyright (c) 2022 Erkin
 */

namespace testnews\testnews\console\controllers;

use testnews\testnews\TestNews;

use Craft;
use yii\console\Controller;
use yii\helpers\Console;

/**
 * Test Command
 *
 * The first line of this class docblock is displayed as the description
 * of the Console Command in ./craft help
 *
 * Craft can be invoked via commandline console by using the `./craft` command
 * from the project root.
 *
 * Console Commands are just controllers that are invoked to handle console
 * actions. The segment routing is plugin-name/controller-name/action-name
 *
 * The actionIndex() method is what is executed if no sub-commands are supplied, e.g.:
 *
 * ./craft test-news/test
 *
 * Actions must be in 'kebab-case' so actionDoSomething() maps to 'do-something',
 * and would be invoked via:
 *
 * ./craft test-news/test/do-something
 *
 * @author    Erkin
 * @package   TestNews
 * @since     1.0.0
 */
class TestController extends Controller
{
    // Public Methods
    // =========================================================================

    /**
     * Handle test-news/test console commands
     *
     * The first line of this method docblock is displayed as the description
     * of the Console Command in ./craft help
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $result = 'something';

        echo "Welcome to the console TestController actionIndex() method\n";

        return $result;
    }

    /**
     * Handle test-news/test/do-something console commands
     *
     * The first line of this method docblock is displayed as the description
     * of the Console Command in ./craft help
     *
     * @return mixed
     */
    public function actionDoSomething()
    {
        $result = 'something';

        echo "Welcome to the console TestController actionDoSomething() method\n";

        return $result;
    }
}
