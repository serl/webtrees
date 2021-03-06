<?php use Fisharebest\Webtrees\Bootstrap4; ?>
<?php use Fisharebest\Webtrees\I18N; ?>

<?= view('admin/breadcrumbs', ['links' => [route('admin-control-panel') => I18N::translate('Control panel'), route('admin-trees', ['ged' => $tree->getName()]) => I18N::translate('Manage family trees '), $title]]) ?>

<h1><?= $title ?></h1>

<p>
	<?= I18N::translate('In a family tree, each record has an internal reference number (called an “XREF”) such as “F123” or “R14”.') ?>
</p>

<p>
	<?= I18N::translate('You can renumber the records in a family tree, so that these internal reference numbers are not duplicated in any other family tree.') ?>
</p>

<p>
	<?= I18N::plural('This family tree has %s record which uses the same “XREF” as another family tree.', 'This family tree has %s records which use the same “XREF” as another family tree.', count($xrefs), I18N::number(count($xrefs))) ?>
</p>

<?php if (!empty($xrefs)): ?>
	<p>
		<?= I18N::translate('You can renumber this family tree.') ?>
	</p>

	<form method="post">
		<?= csrf_field() ?>
		<button type="submit" class="btn btn-primary">
			<i class="fas fa-check"></i>
			<?= /* I18N: A button label. */
			I18N::translate('continue') ?>
		</button>

		<?= I18N::translate('Caution! This may take a long time. Be patient.') ?>
	</form>
<?php endif ?>
