<div class="control-group<?= $field->hasStatus() ? ' '. $field->getStatus() : '' ?>">
	<label for="<?= $field->get('id') ?>"><?= $field->getLabel() ?></label>
	<div class="controls">
		<select<?= $field->getAttributes() ?>>
<?php foreach($field->getOptions() as $text => $value): ?>
			<option value="<?= $value ?>"<?= $field->isSelected($value) ? ' selected="selected"' : '' ?>><?= $text ?></option>
<?php endforeach; ?>
		</select>
<?php foreach($field->getHelps() as $class => $msg): ?>
		<p class="<?= $class ?>"><?= $msg ?></p>
<?php endforeach; ?>
	</div>
</div>
