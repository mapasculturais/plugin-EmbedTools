<?php

namespace EmbedTools;

use MapasCulturais\App;

class Plugin extends \MapasCulturais\Plugin
{
    function __construct($config = [])
    {
        /** @var  App $app */
        $app = App::i();

        $config += [];
        parent::__construct($config);

        $app->hook("app.init:before", function () {
            if (strpos($_SERVER['REQUEST_URI'], '/embedtools') === 0) {
                $theme_instance = new \MapasCulturais\Themes\BaseV1\Theme($this->config['themes.assetManager']);
                $theme_instance->path = $this->view->path;
                $this->view = $theme_instance;
            }
        });
    }

    public function _init()
    {
    }

    public function register()
    {
        /** @var  App $app */
        $app = App::i();

        $app->registerController("embedtools", Controller::class);
    }
}
