<html>
	<?php
		if($emty($_POST))
		{
			$nama = $_POST['nama'];
			$email = $_POST['email'];
			
			echo $nama;
			echo $email;
		}		
	?>
</html>