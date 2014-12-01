<!-- File: app/Model/Movie.php -->

<?php
// creates model to interact with DB
class Film extends AppModel {
	public $validate = array(
		'film_title' => array(
			'rule' => 'notEmpty'
		),
		'description' => array(
			'rule' => 'notEmpty'
		)
	);
}
?>