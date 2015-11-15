<html>
	<?php
		if($empty($_POST))
		{
			$nama = $_POST['nama'];
			$email = $_POST['email'];
			
			echo $nama;
			echo $email;
		}		
	?>
</html>