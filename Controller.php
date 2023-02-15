<?php

namespace EmbedTools;

use MapasCulturais\Entities\Opportunity;
use MapasCulturais\Entities;

class Controller extends \MapasCulturais\Controllers\Opportunity
{
    public function __construct()
    {
        $this->entityClassName = Opportunity::class;

        $this->layout = 'embedtools-opportunity';
    }

    public function GET_formbuilder()
    {
        $entity = $this->requestedEntity;
        $this->render("form-builder", ['entity' => $entity]);
    }

    public function GET_registrationmanager()
    {
        $entity = $this->requestedEntity;
        $this->render("registration-manager", ['entity' => $entity]);
    }
}
