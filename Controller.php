<?php

namespace EmbedTools;

use MapasCulturais\Entities\Opportunity;
use MapasCulturais\Entities;

class Controller extends \MapasCulturais\Controllers\Opportunity
{
    public function __construct()
    {
        $this->entityClassName = Opportunity::class;

        $this->layout = 'nolayout';
    }
}
