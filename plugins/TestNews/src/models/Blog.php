<?php
/**
 * TestNews plugin for Craft CMS 3.x
 *
 * New plugin for news
 *
 * @link      TestNews.com
 * @copyright Copyright (c) 2022 Erkin
 */

namespace testnews\testnews\models;

use testnews\testnews\TestNews;

use Craft;
use craft\base\Model;

/**
 * Blog Model
 *
 * Models are containers for data. Just about every time information is passed
 * between services, controllers, and templates in Craft, it’s passed via a model.
 *
 * https://craftcms.com/docs/plugins/models
 *
 * @author    Erkin
 * @package   TestNews
 * @since     1.0.0
 */
class Blog extends Model
{
    // Public Properties
    // =========================================================================

    /**
     * Some model attribute
     *
     * @var string
     */
    public $someAttribute = 'Some Default';

    // Public Methods
    // =========================================================================

    /**
     * Returns the validation rules for attributes.
     *
     * Validation rules are used by [[validate()]] to check if attribute values are valid.
     * Child classes may override this method to declare different validation rules.
     *
     * More info: http://www.yiiframework.com/doc-2.0/guide-input-validation.html
     *
     * @return array
     */
    public function rules()
    {
        return [
            ['someAttribute', 'string'],
            ['someAttribute', 'default', 'value' => 'Some Default'],
        ];
    }
}
