<!-- File: app/View/Film/add.ctp -->

<section class="title">
	<h1>Add Movie</h1>
</section>

<section class="movie-form">

	<?php echo $this->Form->create('Movie', array(
		'inputDefaults' => array(
			'div' => 'form-group',
			'wrapInput' => false,
			'class' => 'form-control'
		),
		'class' => 'well'
	)); ?>
	<fieldset>
		<?php echo $this->Form->input('text', array(
			'label' => 'Movie Title',
			'placeholder' => 'Enter movie title',
		)); ?>

		<?php echo $this->Form->input('text', array(
			'label' => 'Description',
			'placeholder' => 'Enter description',
			'rows' => '10'
		)); ?>

		<?php echo $this->Form->input('text', array(
			'label' => 'Date',
			'placeholder' => 'Enter release date',
		)); ?>

		<?php echo $this->Form->input('text', array(
			'label' => 'Genre',
			'placeholder' => 'Enter genre',
		)); ?>

		<?php echo $this->Form->input('text', array(
			'label' => 'Poster URL',
			'placeholder' => 'Enter movie poster URL',
		)); ?>

		<?php echo $this->Form->submit('Submit', array(
			'div' => 'form-group',
			'class' => 'btn btn-default'
		)); ?>
	</fieldset>

	<?php echo $this->Form->end(); ?>

</section>
























