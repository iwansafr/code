<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Output</title>
	<style>
		<?php if (!empty($_GET['style'])): ?>
			<?php echo urldecode($_GET['style']) ?>
		<?php endif ?>
	</style>
</head>
<body>
	Web Content <br>
	<?php if (!empty($_GET['html'])): ?>
		<?php echo urldecode($_GET['html']) ?>
	<?php endif ?>
	<hr>
	console
	<div id="log" style="background: black;color: white;"></div>
	<script>
		(function () {
	    if (!console) {
	        console = {};
	    }
	    var old = console.log;
	    var logger = document.getElementById('log');
	    console.log = function (message) {
	        if (typeof message == 'object') {
	            logger.innerHTML += (JSON && JSON.stringify ? JSON.stringify(message) : String(message)) + '<br />';
	        } else {
	            logger.innerHTML += message + '<br />';
	        }
	    }
	})();
		<?php if (!empty($_GET['script'])): ?>
			<?php echo urldecode($_GET['script']) ?>
		<?php endif ?>
	</script>
</body>
</html>