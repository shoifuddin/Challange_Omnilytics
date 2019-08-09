<pre>
<?php

function showGenrate($min,$max)
{
	if(!file_exists("data.txt"))
	{
		
		echo "Run The GeneratorCode";
	}

	$file="data.txt";
	$fo=fopen($file, "r");
	$fz=filesize($file);
	$fr=fread($fo, $fz);
	fclose($fo);
	$input_data=explode(",", $fr);
	//echo "File Size : ";
	for($i=$min; $i<$max; $i++)
	{
		$lowercase = preg_match('@[a-z]@', $input_data[$i]);
		$number    = preg_match('@[0-9]@', $input_data[$i]);
		$must_dot  = preg_match("/@/",implode("@", explode(".",$input_data[$i])));
		if($lowercase==1 && $number===0 && $must_dot===0)
		{
			echo "<p>";
			echo $input_data[$i]." - <font color=#f1c40f>alphabetical strings</font></p><br />";
		}
		elseif($lowercase===0 && $number===1 && $must_dot===0)
		{
			echo "<p>";
			echo $input_data[$i]." - <font color=#1abc9c>integer</font></p><br />";
		}
		elseif($lowercase===0 && $number===1 && $must_dot===1)
		{
			echo "<p>";
			echo $input_data[$i]." - <font color=#8e44ad>realnumber</font></p><br />";
		}
		elseif($lowercase===1 && $number===1 && $must_dot===0)
		{
			echo "<p>";
			echo $input_data[$i]." - <font color=#95a5a6> alphanumeric</font></p><br />";
		}
	}

}


showGenrate(100,200);

?>