<!DOCTYPE html>
<html>
	<head>
		<title>Dosya</title>
	</head>
	<body>

		<form action="yukle.php" method="post" enctype="multipart/form-data">
			<input type="file" name="dosya"></input>
			<button type="submit" value="Yükle">Yükle</button>
		</form>
		<?php
			if (isset($_GET['yukleme']) && $_GET['yukleme']=='no') {
					echo "<p style= 'font-size: 18px;'>Sadece <b>'csv'</b> uzantılı dosyalar yükleyebilirsiniz.</p>";
			}

		?>

	</body>
</html>