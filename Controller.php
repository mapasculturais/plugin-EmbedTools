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
        $entity = $this->requestedEntity;
        $this->render("form-builder", ['entity' => $entity]);
    }

    public function GET_registrationmanager()
    {
        $entity = $this->requestedEntity;
        $this->render("registration-manager", ['entity' => $entity]);
    }

    public function GET_supportbuilder(){
        
        $entity = $this->requestedEntity;
        $this->render("support-builder", ['entity' => $entity]);
    }

    public function GET_registrationform()
    {
        $app = App::i();

        $this->layout = "embedtools-registration";
        $entity = $app->repo("Registration")->find($this->data['id']);
        $this->render("registration-form", ['entity' => $entity]);
    }

    public function GET_affirmativepoliciesmanager(){
        $entity = $this->requestedEntity;
        $this->render("affirmative-policies-manager", ['entity' => $entity]);
    }
}
