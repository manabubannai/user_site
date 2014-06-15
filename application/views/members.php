<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>members page</title>

	<style type="text/css">
	</style>
</head>
<body>

<div id="container">
	<h1>members page</h1>

	<?php
	echo "<pre>";
	print_r ($this->session->all_userdata());
	echo "</pre>";
	?>

	<a href='<?php echo base_url()."main/logout" ?>'>Logout</a>

</div>

</body>
</html>