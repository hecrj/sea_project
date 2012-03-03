<div class="control-group<?= $field->hasStatus() ? ' '. $field->getStatus() : '' ?>">
	<label for="<?= $field->get('id') ?>"><?= $field->getLabel() ?></label>
	<div class="controls">
		<textarea<?= $field->getAttributes() ?>><?= $field->getContent() ?></textarea>
<?php foreach($field->getHelps() as $class => $msg): ?>
		<p class="<?= $class ?>"><?= $msg ?></p>
<?php endforeach; ?>
	</div>
</div>
