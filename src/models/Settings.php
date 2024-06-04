<?php
/**
 * GoogleMapEmbed plugin for Craft CMS 3.x
 *
 * A simple Google Map embed
 *
 * @link      https://www.flowsa.com
 * @copyright Copyright (c) 2018 Flow Communications
 */

namespace flowsa\googlemapembed\models;

use flowsa\googlemapembed\GoogleMapEmbed;

use Craft;
use craft\base\Model;

/**
 * GoogleMapEmbed Settings Model
 *
 * This is a model used to define the plugin's settings.
 *
 * Models are containers for data. Just about every time information is passed
 * between services, controllers, and templates in Craft, it’s passed via a model.
 *
 * https://craftcms.com/docs/plugins/models
 *
 * @author    Flow Communications
 * @package   GoogleMapEmbed
 * @since     0.0.1
 */
class Settings extends Model
{
    // Public Properties
    // =========================================================================

    /**
     * Some field model attribute
     *
     * @var string
     */
    public $apiKey = '';

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
    public function rules(): array
    {
        return [
            ['apiKey', 'string'],
            ['apiKey', 'default', 'value' => ''],
        ];
    }
}
