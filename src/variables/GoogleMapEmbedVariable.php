<?php
/**
 * GoogleMapEmbed plugin for Craft CMS 3.x
 *
 * A simple Google Map embed
 *
 * @link      https://www.flowsa.com
 * @copyright Copyright (c) 2018 Flow Communications
 */

namespace flowsa\googlemapembed\variables;

use flowsa\googlemapembed\GoogleMapEmbed;

use Craft;

/**
 * GoogleMapEmbed Variable
 *
 * Craft allows plugins to provide their own template variables, accessible from
 * the {{ craft }} global variable (e.g. {{ craft.googleMapEmbed }}).
 *
 * https://craftcms.com/docs/plugins/variables
 *
 * @author    Flow Communications
 * @package   GoogleMapEmbed
 * @since     0.0.1
 */
class GoogleMapEmbedVariable
{
    // Public Methods
    // =========================================================================

    /**
     * Whatever you want to output to a Twig template can go into a Variable method.
     * You can have as many variable functions as you want.  From any Twig template,
     * call it like this:
     *
     *     {{ craft.googleMapEmbed.exampleVariable }}
     *
     * Or, if your variable requires parameters from Twig:
     *
     *     {{ craft.googleMapEmbed.exampleVariable(twigValue) }}
     *
     * @param null $optional
     * @return string
     */
    public function apiKey()
    {
        return GoogleMapEmbed::$plugin->getSettings()->apiKey;
    }

    public function iframeSrc($value)
    {
        return 'https://www.google.com/maps/embed/v1/place?key=' . $this->apiKey() . '&q=' . $value;
    }
}
