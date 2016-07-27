<?php
/**
 * @link      https://craftcms.com/
 * @copyright Copyright (c) Pixel & Tonic, Inc.
 * @license   https://craftcms.com/license
 */

namespace craft\app\web\twig\variables;

/**
 * Plugin functions.
 *
 * @author Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @since  3.0
 */
class Plugins
{
    // Public Methods
    // =========================================================================

    /**
     * Returns info about all of the plugins saved in craft/plugins, whether they’re installed or not.
     *
     * @return array Info about all of the plugins saved in craft/plugins
     */
    public function getPluginInfo()
    {
        return \Craft::$app->getPlugins()->getPluginInfo();
    }

    /**
     * Returns a plugin’s SVG icon.
     *
     * @param string $pluginHandle The plugin’s handle
     *
     * @return string The plugin’s SVG icon
     */
    public function getPluginIconSvg($pluginHandle)
    {
        return \Craft::$app->getPlugins()->getPluginIconSvg($pluginHandle);
    }
}