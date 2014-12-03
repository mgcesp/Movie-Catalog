<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		// echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		// bootstrap connections
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('mystyles');
	?>
	<style>
		body,html {
			background-color: #67809F;
		}

	</style>
</head>
<body>
	<?php include 'inc/navbar.ctp' ?>

	<div id="container">
		<?php echo $this->Session->flash() ?>

		<?php echo $this->fetch('content'); ?>

		<footer>
			<div>
				<p>Developed by mcfresh</p>
			</div>
		</footer>
		<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
		<?php echo $this->Html->script('bootstrap.min') ?>
	</div>
	<!-- sql dump -->
	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>
