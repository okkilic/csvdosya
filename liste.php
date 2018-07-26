<style>
	table#table {

		border: 1px solid #000000;

		align: center;
		text-align: center;
		margin: auto;
		margin-top: 100px;
	}


</style>



<table id="table" >
	<td>
		<p >Aşağıdaki listelenmiş dosyaları tıklayarak görünteleyebilirsiniz.<p>

<?php





//BURADA KALDIN LİSTE PHP İÇİNDE CSV DOSYA OKUNMUYOR HATALI / TABLO OLUŞTURUYORSUN

 
switch ($_GET) {

	default:
		$dir= "yuklenenler/";
		$ac=opendir($dir);
			while ($listele=readdir($ac)) 
			{
				if(is_dir($listele)) {echo '<a href="../tablo.php?act=open&dir=' .$listele.' "> '.$listele.'</a><br/>';
			}
				else 
				{ echo '<a href="http://localhost/dosyaodev/tablo.php?dosya=' .$listele.' ">'.$listele.'</a><br/>';}

			}
	break;
	case 'open':
		$dir=$_GET['dir'];
		$ac = opendir($dir);
			while ($listele=readdir($ac)) {
				if(is_dir($listele)) {echo '<a href="?act=open&dir=' .$listele.' "> '.$listele.'</a><br/>';
			}
				else 
				{ echo '<a href="?act=fileopen&f=' .$listele.' ">'.$listele.'</a><br/>';}
			}
			
			break;

	case 'fileopen':
		$f=$_GET['f'];
		echo $f.' içindekiler';
		$ac=fopen($f, "r");

		while(!feof($ac))
		{
			$satir=fgets($ac);
			echo $satir;
		}

	break;
}




/*


    $folder_name = "http://localhost/dosyaodev/yuklenenler/";
    if(file_exists($folder_name) && is_dir($folder_name)){ // Klasör var ise
        $folder = opendir($folder_name); // Klasörü aç
        while($file = readdir($folder)){ // klasör içindeki dosyaları oku ve döngüye al
            echo $folder_name."/".$file."<br>"; // klasör ve dosyaları ekrana yaz.
        }
        closedir($folder); // Klasörü kapat
    }else{ // Klasör yok ise
        echo "Klasör bulunamadı!";
    }


	
	//if ($_FILES= opendir('http://localhost/dosyaodev/yuklenenler/'));


	
	/*$i = opendir("http://localhost/dosyaodev/yuklenenler/");

	while($dosya= readdir($i))
	{
		echo $i;
	}

--------------

/*


if ($handle = opendir('http://localhost/dosyaodev/yuklenenler/')) {
   // $blacklist = array('.', '..', '.jpg', 'somefile.php');
    while (false !== ($file = readdir($handle))) {
        if (!in_array($file)) {
            echo "$file\n";
        }
    }
    closedir($handle);
}

echo $handle;


/*

$dizin="http://localhost/dosyaodev/yuklenenler/"; 

if(is_dir($dizin)) 
{ 
if($h= opendir($dizin)) 
{ 
while (($file = readdir($h)) !== false) 
{ 
echo "filename:" . $file . "<br>";

} 
   closedir($dh);
} 

}else{ 

echo 'Böyle bir klasör yok'; 
}  

*/


?>
	</td>
</table>