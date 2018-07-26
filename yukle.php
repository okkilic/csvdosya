<?php

//print_r($_FILES);

if($_FILES['dosya'])
{
	$file_type = $_FILES['dosya']['type'];
	$file_name = $_FILES['dosya']['name'];
	$file_bol = explode('.', $file_name);
	$uzanti = $file_bol[count($file_bol)-1];
	$dosya_yolu ='yuklenenler/';

		if($uzanti!='csv')
			{
				echo "<p style= 'font-size: 20px; text-align: center; margin-top: 50px;'>Sadece <b>'csv'</b> uzantılı dosyalar yükleyebilirsiniz.</p>";
					header('location: http://localhost/dosyaodev/form.php?yukleme=no');

			} 
			elseif ($uzanti='csv')
			{
				$temp_file = $_FILES['dosya']['tmp_name'];
				move_uploaded_file($temp_file, $dosya_yolu .$file_name);

				header('location: http://localhost/dosyaodev/tablo.php');
				//header('location:http//localhost/htdocs/dosyaodev/tablo.php)';

			}
			else
			{
				header('location: http://localhost/dosyaodev/form.php');
			}

			
}	




/*
	$bol = explode('.', $_FILES['dosya']['name']);
	$uzanti = end($bol);

	print_r($uzanti);

	if($uzanti==)
	
	if (move_uploaded_file($_FILES['dosya']['tmp_name'], 'yuklenenler/'.$_FILES['dosya']['name'])) 
	{ 
			$bol = explode('.', $_FILES['dosya']['name']);
			$uzanti = end($bol);

		//header('location: http://localhost/dosyaodev/tablo.php?yukleme=ok');
	
	}*/



?>