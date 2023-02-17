<?php

namespace EmbedTools;

use MapasCulturais\App;
use MapasCulturais\Entities\Opportunity;

class Controller extends \MapasCulturais\Controllers\Opportunity
{
    public function __construct()
    {
        $this->entityClassName = Opportunity::class;

        $this->layout = 'embedtools-opportunity';
    }

    public function GET_formbuilder()
    {
        $app = App::i();

        if ($entity = $this->requestedEntity) {
            $app->pass();
        }

        $this->render("form-builder", ['entity' => $entity]);
    }

    public function GET_registrationmanager()
    {
        $app = App::i();

        if (!$entity = $this->requestedEntity) {
            $app->pass();
        }

        $this->render("registration-manager", ['entity' => $entity]);
    }

    public function GET_supportbuilder(){
    
        $app = App::i();

        if (!$entity = $this->requestedEntity) {
            $app->pass();
        }

        $this->render("support-builder", ['entity' => $entity]);
    }

    public function GET_registrationform()
    {
        $app = App::i();

        $this->entityClassName = "MapasCulturais\\Entities\\Registration";

        if ($entity = $this->requestedEntity) {
            $app->pass();
        }

        $this->layout = "embedtools-registration";
        $this->render("registration-form", ['entity' => $entity]);
    }

    public function GET_affirmativepoliciesmanager(){
    
        $app = App::i();

        if ($entity = $this->requestedEntity) {
            $app->pass();
        }

        $this->render("affirmative-policies-manager", ['entity' => $entity]);
    }
}
