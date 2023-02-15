<?php

use MapasCulturais\Entities\Registration;

$action = preg_replace("#^(\w+/)#", "", $this->template);

$this->bodyProperties['ng-app'] = "entity.app";
$this->bodyProperties['ng-controller'] = "EntityController";

$this->jsObject['angularAppDependencies'][] = 'entity.module.opportunity';
$this->jsObject['angularAppDependencies'][] = 'ui.sortable';

$this->addEntityToJs($entity);

$this->addOpportunityToJs($entity);

$this->addOpportunitySelectFieldsToJs($entity);

$this->includeAngularEntityAssets($entity);

?>