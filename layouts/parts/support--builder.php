<article ng-controller="SupportForm">
        <?php $this->part('support/opportunity-support-settings', ['entity' => $entity]);?>
        <?php $this->part('support/opportunity-support', ['entity' => $entity]);?>
    </article>
