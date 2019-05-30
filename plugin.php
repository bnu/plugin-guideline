<?php
namespace Xpressengine\Plugins\Guideline;

use Xpressengine\Plugin\AbstractPlugin;

/**
 * Class Plugin
 */
class Plugin extends AbstractPlugin
{
    /**
     * @return boolean
     */
    public function install()
    {
    }

    /**
     * @return boolean
     */
    public function unInstall()
    {
    }

    /**
     * @return boolean
     */
    public function checkInstalled($installedVersion = NULL)
    {
        return true;
    }

    public function activate($installVersion = null)
    {
    }

    public function deactivate($installedVersion = null)
    {
    }

    public function boot()
    {
        $app = app();
        $app->singleton(Plugin::class, function ($app) {
            return $this;
        });
        $app->alias(Plugin::class, 'xe.plugin.guideline');
    }
}
