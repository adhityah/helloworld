<html>
	<?php
		
		
		if($emty($_POST))
		{
			$nama = $_POST['name'];
			$email = $_POST[email];
		}
		
	?>
	
	<h1><?php $nama ?></h1>
	
	<h3><?php $email ?></h3>
	
	

</html>