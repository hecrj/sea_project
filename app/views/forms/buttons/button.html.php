<button class="btn<?= $button->get('type') == 'submit' ? ' btn-primary' : '' ?><?= $button->shift('class') ?>"<?= $button->getAttributes() ?>><?= $button->getText() ?></button>
