<?php
/**
 * TestNews plugin for Craft CMS 3.x
 *
 * New plugin for news
 *
 * @link      TestNews.com
 * @copyright Copyright (c) 2022 Erkin
 */

namespace testnews\testnews\controllers;

use testnews\testnews\TestNews;

use Craft;
use craft\web\Controller;

/**
 * Test Controller
 *
 * Generally speaking, controllers are the middlemen between the front end of
 * the CP/website and your plugin’s services. They contain action methods which
 * handle individual tasks.
 *
 * A common pattern used throughout Craft involves a controller action gathering
 * post data, saving it on a model, passing the model off to a service, and then
 * responding to the request appropriately depending on the service method’s response.
 *
 * Action methods begin with the prefix “action”, followed by a description of what
 * the method does (for example, actionSaveIngredient()).
 *
 * https://craftcms.com/docs/plugins/controllers
 *
 * @author    Erkin
 * @package   TestNews
 * @since     1.0.0
 */
class TestController extends Controller
{

    // Protected Properties
    // =========================================================================

    /**
     * @var    bool|array Allows anonymous access to this controller's actions.
     *         The actions must be in 'kebab-case'
     * @access protected
     */
    protected $allowAnonymous = ['index', 'do-something'];

    // Public Methods
    // =========================================================================

    /**
     * Handle a request going to our plugin's index action URL,
     * e.g.: actions/test-news/test
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $result = 'Welcome to the TestController actionIndex() method';

        return $result;
    }

    /**
     * Handle a request going to our plugin's actionDoSomething URL,
     * e.g.: actions/test-news/test/do-something
     *
     * @return mixed
     */
    public function actionDoSomething()
    {
        $result = 'Welcome to the TestController actionDoSomething() method';

        return $result;
    }
}
