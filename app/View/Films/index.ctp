<!-- File: View/Films/index.ctp -->

<h1>Films</h1>

<table>
	<tr>
		<th>ID</th>
		<th>Film</th>
		<th>Description</th>
	</tr>
	<?php  foreach ($films as $film): ?>
	<tr>
		<td><?php echo $film['Film']['film_id']; ?></td>
		<td><?php echo $film['Film']['film_title']; ?></td>
		<td><?php echo $film['Film']['description']; ?></td>
	</tr>
<?php endforeach ?>
</table>