<html>
<head>
	<meta charset="UTF-8">
	<title>Users</title>
</head>
<body>
	<h1>USERS</h1>
	<table class="table table-striped">
    <tr>
        <th>id</th>
		<th>username</th>
		<th>role</th>
		<th>created</th>
		<th>modified</th>
    </tr>

    <?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo $user['User']['id']; ?></td>
        <td>
            <?php
                echo $this->Html->link(
                    $user['User']['username'],
                    array('action' => 'view', $user['User']['id'])
                );
            ?>
        </td>
        <td>
            <?php echo $user['User']['role']; ?>
        </td>
        <td>
            <?php echo $user['User']['created']; ?>
        </td>
        <td>
            <?php echo $user['User']['modified']; ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>

</body>
</html>