<?= view('modals/header', ['title' => $title]) ?>

<div class="modal-body">
	<div class="alert alert-danger">
		<?= $error ?>
	</div>
</div>

<?= view('modals/footer-close') ?>
