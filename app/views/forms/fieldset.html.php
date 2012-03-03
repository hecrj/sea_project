<?php if($fieldset->hasStatus()): ?>
<?php if($fieldset->isSuccess()): ?>
	<div class="alert alert-success">
		<strong><?= $fieldset->getSuccessMessage() ?: '¡Los cambios realizados se han guardado con éxito!' ?></strong>
	</div>
<?php else: ?>
	<div class="alert alert-block alert-error">
		<p><strong>¡Oops! Some errors have occurred:</strong></p>
		<ul>
		<?php foreach($fieldset->getErrors() as $error): ?>
			<li><?= $error ?></li>
		<?php endforeach; ?>
		</ul>
	</div>
<?php endif; ?>
<?php endif; ?>
<fieldset>
<?php if($fieldset->hasLegend()): ?>
	<legend><?= $fieldset->getLegend() ?></legend>
<?php endif; ?>
<?php foreach($fieldset->getFields() as $field)
		$this->render('forms/fields/'. $field->getTagName(), array('field' => $field)) ?>
</fieldset>
