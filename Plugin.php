<?php

namespace EmbedTools;

use MapasCulturais\App;

class Plugin extends \MapasCulturais\Plugin
{
    function __construct($config = [])
    {
        $config += [];
        parent::__construct($config);
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
