<!-- File: View/Films/index.ctp -->
<section class="title">
	<h1>Movies</h1>
</section>

<section class="movie-table">
	<table class="table table-striped">
		<tr>
			<th>ID</th>
			<th>Title</th>
			<th>Description</th>
			<th>Date</th>
			<th>Genre</th>
			<th>Poster</th>
			<th>Delete</th>
		</tr>
		<?php  foreach ($movies as $movie): ?>
		<tr>
			<td><?php echo $movie['movies']['id']; ?></td>
			<td><?php echo $movie['movies']['title']; ?></td>
			<td><?php echo $movie['movies']['description']; ?></td>
			<td><?php echo $movie['movies']['date']; ?></td>
			<td><?php echo $mocie['movies']['genre']; ?></td>
			<td>
				<img src="<?php echo $movie['Film']['poster']; ?>" alt="" width="100" height="100">
			</td>
		</tr>
	<?php endforeach ?>
	</table>
</section>
