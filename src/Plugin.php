<?php
/**
 * @copyright Copyright (c) PutYourLightsOn
 */

namespace putyourlightson\datastar\plugin;

use Craft;
use craft\base\Model;
use craft\base\Plugin as BasePlugin;
use putyourlightson\datastar\Datastar;
use putyourlightson\datastar\models\SettingsModel;

class Plugin extends BasePlugin
{
    public function init(): void
    {
        parent::init();

        if (Craft::$app->getRequest()->getIsSiteRequest()) {
            Datastar::bootstrap();
        }
    }

    /**
     * This method is implemented in order to prevent warnings about attempting to set settings on a plugin that doesn’t have settings when a `datastar.php` config file exists.
     */
    public function getSettings(): Model
    {
        return new SettingsModel();
    }
}
