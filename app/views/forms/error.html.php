<div class="alert-message block-message error">
	<h3>¡Ups! Ha ocurrido algun error:</h3>

<?php if(is_array($message)): ?>
	<ul>
<?php foreach($message as $error_msg): ?>
		<li><?= $error_msg ?></li>
<?php endforeach; ?>
	</ul>
<?php else: ?>
	<p><?= $message ?></p>
<?php endif; ?>
</div>
