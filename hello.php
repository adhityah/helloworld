<html>
	<?php
		if($emty($_POST))
		{
			$nama = $_POST['name'];
			$email = $_POST['email'];
		}
	?>
	
	<body>
		<h1><?php $nama ?></h1>
	
		<h3><?php $email ?>x</h3>
	</body>
</html>