<!-- app/View/Users/add.ctp -->
<!-- <div class="users form">
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend>
        <?php echo __('Add User'); ?>
        </legend>
        <?php
	        echo $this->Form->input('username');
	        echo $this->Form->input('password');
	        echo $this->Form->input('role', array(
	            'options' => array('admin' => 'Admin', 'author' => 'Author')
	        ));
    	?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div> -->

<html>
<head>
	<meta charset="UTF-8">
	<title>ADD USER</title>
</head>
<body>
	<h1><?php echo __('Add User');?>Add NEW User</h1>
	<div class="users form">
		<?php echo $this->Form->create('User'); ?>
		<fieldset>
			<legend>
				<?php echo __('Add User'); ?>
			</legend>
			<div class="form-titles">
				<?php
					echo $this->Form->input('username');
					echo $this->Form->input('password');
					echo $this->Form->input('role',
						array('options'=>array(
							'admin'=>'Admin',
							'author'=>'Author',
							'bitch'=>'Puta')));
				?>
			</div>
		</fieldset>
		<?php echo $this->Form->end(__('Submit')); ?>
	</div>
</body>
</html>