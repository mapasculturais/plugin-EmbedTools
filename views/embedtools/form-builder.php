<?php

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
<article class="main-content opportunity" ng-controller="OpportunityController">
    <?php $this->part('singles/opportunity-registrations--fields', ['entity' => $entity]); ?>
</article>