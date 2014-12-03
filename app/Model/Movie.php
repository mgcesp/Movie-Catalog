<!-- File: app/Model/Movie.php -->

<?php
// creates model to interact with DB
class Movie extends AppModel {
	public $validate = array(
		'title' => array(
			'rule' => 'notEmpty'
		),
		'description' => array(
			'rule' => 'notEmpty'
		),
	);
}
?>