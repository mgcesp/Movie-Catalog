<!-- File: app/View/Film/add.ctp -->

<h1>Add Movie</h1>

<?php

echo $this->Form->create('Film');
echo $this->Form->input('film_title');
echo $this->Form->input('description', array('rows' => '3'));
echo $this->Form->end('Save Film');

?>